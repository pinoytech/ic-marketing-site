<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class Posts extends Component
{
    use WithPagination;

    public $id;

    public function render()
    {
        $posts = Post::orderBy('published_date', 'desc')->paginate(10);

        return view('livewire.admin.posts.posts', [
            'posts' => $posts,
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('edit-post', $id);
    }

    public function delete($id)
    {
        $this->id = $id;
        Flux::modal('delete-post')->show();
    }

    public function deletePost()
    {
        // Delete image if it exists
        $post = Post::find($this->id);
        if ($post && $post->resource_image_path) {
            Storage::disk('resource')->delete($post->resource_image_path);
        }
        Post::destroy($this->id);
        Flux::modal('delete-post')->close();
        session()->flash('message', 'Post deleted successfully.');
        $this->redirectRoute('admin.posts', navigate: true);
    }
}
