<?php

namespace App\Livewire\Auth;

use App\Models\Post;
use Livewire\Component;

class Posts extends Component
{
    public function render()
    {
        $posts = Post::orderBy('published_date', 'desc')->get();

        return view('livewire.auth.posts', [
            'posts' => $posts,
        ]);
    }
}
