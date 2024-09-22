<?php

namespace App\View\Components;

use Closure;
use Livewire\Component;
use Illuminate\Contracts\View\View;
// use Illuminate\View\Component;
use Illuminate\Support\Str;
use Livewire\WithFileUploads;
use App\Models\Blogs;

class BlogList extends Component
{   
    use WithFileUploads;
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    public $blogs;

    public function mount()
    {
        $this->blogs = Blogs::all(); // Mengambil semua blog post
    }

    public function render()
    {
        return view('components.blog.list');
    }

    // public $blogs;

    // public function mount()
    // {
    //     $this->blogs = Blogs::all();
    // }

    // public function delete($id)
    // {
    //     Blogs::find($id)->delete();
    //     $this->blogs = Blogs::all(); // Refresh daftar blog
    //     session()->flash('success', 'Blog post deleted successfully!');
    // }

    // public function render()
    // {   
    //     return view('components.blog.list', [
    //         'blogs' => $this->blogs = Blogs::all()
    //     ]);
    // }

    // public function render(): View|Closure|string
    // {
    //     return view('components.blog.blogs');
    // }

    // public $title;
    // public $slug;
    // public $image;
    // public $category;
    // public $body;

    // protected $rules = [
    //     'title' => 'required|min:5',
    //     'slug' => 'required|unique:blog_posts,slug',
    //     'image' => 'nullable|image|max:1024',
    //     'category' => 'required',
    //     'body' => 'required|min:10',
    // ];

    // public function updatedTitle($value)
    // {
    //     $this->slug = Str::slug($value);
    // }

    // public function submit()
    // {
    //     $this->validate();

    //     $imagePath = null;
    //     if ($this->image) {
    //         $imagePath = $this->image->store('images', 'public');
    //     }

    //     ModelBlogs::create([
    //         'title' => $this->title,
    //         'slug' => $this->slug,
    //         'image' => $imagePath,
    //         'category' => $this->category,
    //         'body' => $this->body,
    //     ]);

    //     $this->reset(['title', 'slug', 'image', 'category', 'body']);
    //     session()->flash('message', 'Blog post successfully created.');
    // }
}
