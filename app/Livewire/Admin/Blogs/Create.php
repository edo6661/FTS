<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public Blog $blog;
    public $image;
    public function mount()
    {
        $this->blog = new Blog();
    }
    public function rules()
    {
        return [
            'blog.title' => 'required|string|max:255',
            'blog.description' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function save()
    {
        $this->validate();
        if ($this->blog->image     && file_exists(storage_path('app/public/' . $this->blog->image))) {
            unlink(storage_path('app/public/' . $this->blog->image));
        }

        $this->blog->image = $this->image->store('images', 'public');
        $this->blog->save();
        $this->blog->users()->attach(Auth::user()->id);
        session()->flash('success', 'Blog created successfully.');
        return $this->redirectIntended(route("admin.blogs.index"), true);
    }
    public function render()
    {
        return view('livewire.admin.blogs.create');
    }
}
