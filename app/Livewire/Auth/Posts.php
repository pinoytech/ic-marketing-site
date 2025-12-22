<?php

namespace App\Livewire\Auth;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;

class Posts extends Component
{
    public $id;

    public function render()
    {
        $posts = Post::orderBy('published_date', 'desc')->paginate(10);

        return view('livewire.auth.posts', [
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
        Post::destroy($this->id);
        Flux::modal('delete-post')->close();
        session()->flash('message', 'Post deleted successfully.');
        $this->redirectRoute('posts', navigate: true);
    }
}
