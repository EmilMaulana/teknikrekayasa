<?php

namespace App\Livewire\Blogs;

use Livewire\Component;
use App\Models\Category;
use App\Models\Blogs;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class Edit extends Component
{   
    use WithFileUploads;
    public $categories;
    public $blog;
    public $title;
    public $body;
    public $image;
    public $category_id;

    public function mount(Blogs $blog)
    {   
        $this->blog = $blog;
        $this->title = $blog->title;
        $this->body = $blog->body;
        $this->image = $blog->image;
        $this->category_id = $blog->category_id;
        $this->categories = Category::all(); // Ambil semua kategori
    }

    public function render()
    {      
        return view('livewire.blogs.edit', [
            'blog' => $this->blog,
            'categories' => $this->categories,
        ]);
    }

    public function update()
    {   
        dd($this->blog);
        // Validasi input
        $validatedData = $this->validate([
            'title' => 'max:255|unique:blogs,title,',
            'category_id' => 'max:255',
            'body' => 'nullable',
            'image' => 'nullable|image|max:1024' // Jika ada file baru, validasi file gambar
        ]);

        // Jika ada file gambar yang diupload
        if ($this->image) {
            $validatedData['image'] = $this->image->store('post-images');
        }

        // Slug dan excerpt baru
        $validatedData['slug'] = Str::slug($this->title);
        $validatedData['excerpt'] = Str::limit(strip_tags($this->body), 90);
        $validatedData['user_id'] = Auth::user()->id;

        // Update blog
        $this->blog->update($validatedData);

        // Flash message success
        session()->flash('success', 'Blog updated successfully.');

        // Redirect atau refresh
        return redirect()->route('blog.index');
    }
}
