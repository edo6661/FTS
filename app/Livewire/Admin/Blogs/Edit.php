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
            'imageFile' => 'image|mimes:jpeg,png,jpg|max:2048',
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

        if ($this->imageFile) {
            // Hapus gambar lama jika ada
            if ($this->blog->image && Storage::disk('s3')->exists($this->blog->image)) {
                Storage::disk('s3')->delete($this->blog->image);
            }

            // Upload ke S3
            $path = $this->imageFile->storeAs(
                'images/blogs',
                time() . '-' . $this->imageFile->getClientOriginalName(),
                's3'
            );

            $this->blog->image = $path;
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
