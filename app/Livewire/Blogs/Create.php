<?php

namespace App\Livewire\Blogs;

use App\Models\Blogs;
use Livewire\Component;
use Illuminate\Support\Str;

class Create extends Component
{   
    public $title = 'EMIL MAULANA';
    public $slug;
    public $category;
    public $image;
    public $body = 'INI BODY';

    public function mount()
    {
        $this->slug = Str::slug($this->title);
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        return view('livewire.blogs.create',[
            'title' => $this->title,
            'body' => $this->body,
        ]);
    }

    public function store()
    {   
        $this->title = "ini judul";
        $this->body = "ini body";
        // $this->validate([
        //     'title' => 'required|max:255',
        //     'slug' => 'required|unique:blogs,slug|max:255',
        //     'category' => 'required',
        //     'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'body' => 'required'
        // ]);

        // $imageName = time().'.'.$this->image->extension();
        // $this->image->storeAs('blogs', $imageName);

        // Blogs::create([
        //     'title' => $this->title,
        //     'slug' => $this->slug,
        //     'category' => $this->category,
        //     'image' => 'posts/' . $imageName,
        //     'body' => $this->body
        // ]);

        // session()->flash('message', 'Post created successfully.');

        // return redirect()->route('posts.index');
        
    }
}
