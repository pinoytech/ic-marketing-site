<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Component;

class PostFull extends Component
{
    public $perPage = 9;

    public $hasMore = true;

    public function loadMore()
    {
        $this->perPage += 9;
    }

    public function render()
    {
        $posts = Post::orderBy('published_date', 'desc')
            ->take($this->perPage)
            ->get();

        $totalPosts = Post::count();
        $this->hasMore = $posts->count() < $totalPosts;

        return view('livewire.post-full', [
            'posts' => $posts,
            'hasMore' => $this->hasMore,
        ]);
    }
}
