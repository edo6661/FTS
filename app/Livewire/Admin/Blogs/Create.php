<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public Blog $blog;
    public $imageFile;

    public function mount()
    {
        $this->blog = new Blog();
    }

    public function rules()
    {
        return [
            'blog.title' => 'required|string|max:255',
            'blog.description' => 'required|string|max:255',
            'imageFile' => 'image|mimes:jpeg,png,jpg|max:2048',
        ];
    }

    public function save()
    {
        $this->validate();

        if ($this->blog->image && Storage::disk('s3')->exists($this->blog->image)) {
            Storage::disk('s3')->delete($this->blog->image);
        }

        // Upload ke S3
        if ($this->imageFile) {
            $path = $this->imageFile->storeAs(
                'images/blogs',
                time() . '-' . $this->imageFile->getClientOriginalName(),
                's3'
            );

            $this->blog->image = $path;
        }

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
