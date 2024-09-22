<?php

namespace App\Livewire\Blogs;

use App\Models\Blogs;
use App\Models\Category;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Create extends Component
{   
    public $title;
    public $slug;
    public $category_id;
    public $user_id;
    public $image;
    public $body;

    public function mount()
    {
        $this->category_id = Category::all(); // Ambil semua data kelas
    }

    public function updatedTitle()
    {
        $this->slug = Str::slug($this->title);
    }
    public function render()
    {
        return view('livewire.blogs.create',[
            'category' =>$this->category_id
        ]);
    }

    public function store(Request $request)
    {   
        $validatedData = $request->validate([
            'title' => 'unique:blogs|required|max:255',
            'category_id' => 'required',
            'body' => 'required'
        ]);
        
        
        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('post-images');
        }
        
        $validatedData['slug'] = Str::slug($request->title);
        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['excerpt'] = Str::limit(strip_tags($request->body), 90);
        
        // dd($validatedData);
        Blogs::create($validatedData);

        session()->flash('message', 'Article created successfully.');

        return redirect()->route('blog.index');
        
    }


}
