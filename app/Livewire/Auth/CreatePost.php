<?php

namespace App\Livewire\Auth;

use App\Models\Post;
use Flux\Flux;
use Livewire\Component;

class CreatePost extends Component
{
    public $title;

    public $content;

    public $author;

    public $image;

    public $published_date;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author' => 'required|string|max:255',
        'image' => 'nullable|url',
        'published_date' => 'required|date',
    ];

    public function save()
    {
        $this->validate();

        Post::create([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'image' => $this->image,
            'published_date' => $this->published_date,
        ]);

        // Reset form fields
        // $this->reset(['title', 'content', 'author', 'image', 'published_date']);
        $this->reset();

        Flux::modal('create-post')->close();
        session()->flash('message', 'Post created successfully.');
        $this->redirectRoute('posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.auth.create-post');
    }
}
