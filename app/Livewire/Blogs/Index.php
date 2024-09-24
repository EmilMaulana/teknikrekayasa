<?php

namespace App\Livewire\Blogs;

use Livewire\Component;
use App\Models\Blogs;
use Livewire\WithPagination;
class Index extends Component
{
    public $blogs;
    public $query;
    public $search = '';
    use WithPagination;

    public function updatingSearch()
    {
        $this->resetPage(); // Reset ke halaman 1 ketika pencarian berubah
    }

    public function render()
    {      
        $query = Blogs::query();

        if (!empty($this->search)) {
            $query->where('title', 'like', '%' . $this->search . '%')
                ->orWhere('body', 'like', '%' . $this->search . '%');
        }

        $blogs = $query->latest()->paginate(10);
        // Blogs::where('title', 'like', '%' . $this->search . '%')->paginate(5)

        return view('livewire.blogs.index',[
            'blogss' => $blogs
        ]);
    }
}
