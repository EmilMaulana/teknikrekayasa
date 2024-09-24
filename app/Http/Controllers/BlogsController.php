<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class BlogsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.blogs.index', [
            'title' => "LIST POST",
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.blogs.create', [
            'title' => "CREATE POST",
        ]) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($slug)
    {   
        $blog = Blogs::where('slug', $slug)->first();
        if (!$blog) {
            dd('Blog tidak ditemukan'); // Cek apakah blog ada
        }

        return view('dashboard.blogs.edit', [
            'title' => $blog->title,
            'blog' => $blog,
            'categories' => Category::all()
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $slug)
    {
        // Validasi input
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'category_id' => 'required',
            'body' => 'required',
            'image' => 'nullable|image|max:1024' // Validasi file gambar
        ]);

        // Ambil blog berdasarkan slug
        $blog = Blogs::where('slug', $slug)->firstOrFail();

        // Jika ada file gambar yang diupload
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($blog->image) {
                Storage::delete($blog->image);
            }
            $validatedData['image'] = $request->file('image')->store('post-images');
        } else {
            // Jika tidak ada file baru, tetap gunakan gambar yang ada
            $validatedData['image'] = $blog->image;
        }

        // Slug dan excerpt baru
        $validatedData['slug'] = Str::slug($request->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 90);
        $validatedData['user_id'] = Auth::user()->id;

        // Update blog
        $blog->update($validatedData);

        // Flash message success
        session()->flash('success', 'Blog updated successfully.');

        // Redirect atau refresh
        return redirect()->route('blog.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blogs $blog)
    {
        $blog = Blogs::where('slug', $blog->slug)->firstOrFail();

        if ($blog->image) {
            Storage::delete($blog->image);
        }

        Blogs::destroy($blog->id);

       // Flash message success
       session()->flash('success', 'Blog has been deleted.');

       // Redirect atau refresh
       return redirect()->route('blog.index');
    }

    public function imageUpload(Request $request)
    {
        $request->validate([
            'file' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $path = $request->file('file')->store('images', 'public');

        return response()->json(['location' => asset('storage/' . $path)]);
    }
}
