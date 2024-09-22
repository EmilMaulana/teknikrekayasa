<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blogs;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('front.index', [
            'title' => 'TEKNIK REKAYASA | TUTORIAL PEMROGRAMAN WEB',
            'blogs' => Blogs::latest()->paginate(6)
        ]);
    }

    public function show($slug)
    {   
        $blog = Blogs::where('slug', $slug)->first();

        // dd($blog);
        return view('front.post', [
            'title' => $blog->title,
            'blog' => $blog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
