<?php

namespace App\Livewire\Blogs;

use Livewire\Component;
use App\Models\Blogs;

class Index extends Component
{
    public $blogs;
    public $title = 'EMIL MAULANA';
    public $slug;
    public $category;
    public $image;
    public $body = 'INI BODY';

    public function mount()
    {
        $this->blogs = Blogs::all(); // Mengambil semua blog post
    }

    public function render()
    {
        return view('livewire.blogs.index');
    }
}
