<?php

namespace App\Livewire\Admin\Blogs;

use App\Models\Blog;
use Livewire\Component;
use Illuminate\Support\Facades\Storage;

class Index extends Component
{
    public function render()
    {
        return view('livewire.admin.blogs.index', [
            'blogs' => Blog::paginate(3),
        ]);
    }
    public function delete($id)
    {
        $blog = Blog::findOrFail($id);

        // Hapus gambar dari S3
        if ($blog->image && Storage::disk('s3')->exists($blog->image)) {
            Storage::disk('s3')->delete($blog->image);
        }

        $blog->users()->detach();
        $blog->delete();

        session()->flash('success', 'Blog deleted successfully.');
    }
}
