<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.index', [
            'blogs' => Blog::latest()->paginate(3),
        ]);
    }
    public function delete($id)
    {
        Blog::find($id)->delete();
        session()->flash('success', 'Blog deleted successfully.');
    }
}
