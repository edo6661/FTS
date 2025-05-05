<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Edit extends Component
{
    use WithFileUploads;

    public Blog $blog;
    public $image;
    public function rules()
    {
        return [
            'blog.title' => 'required|string|max:255',
            'blog.description' => 'required|string|max:255',
            'image' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }
    public function mount($id)
    {
        $this->blog = Blog::find($id);
        if (!$this->blog) {
            session()->flash('error', 'Blog not found.');
            return redirect()->route("admin.blogs.index");
        }
    }
    public function edit()
    {
        $this->validate();

        $oldImagePath = $this->blog->image;

        if ($this->image) {
            $newImagePath = $this->image->store('images', 'public');

            if ($newImagePath) {
                $this->blog->image = $newImagePath;

                if ($oldImagePath) {
                    Storage::disk('public')->delete($oldImagePath);
                }
            } else {
                session()->flash('error', 'Gagal menyimpan image baru.');
                return;
            }
        }

        $this->blog->save();

        session()->flash('success', 'Blog updated successfully.');

        return redirect()->route("admin.blogs.index");
    }
    public function render()
    {
        return view('livewire.admin.blogs.edit');
    }
}
