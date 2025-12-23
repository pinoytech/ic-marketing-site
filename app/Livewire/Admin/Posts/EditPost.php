<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class EditPost extends Component
{
    public $id;

    public $title;

    public $content;

    public $author;

    public $image;

    public $published_date;

    #[On('edit-post')]
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->author = $post->author;
        $this->image = $post->image;
        $this->published_date = $post->published_date;

        Flux::modal('edit-post')->show();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|url',
            'published_date' => 'required|date',
        ]);

        $post = Post::find($this->id);

        $post->update([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'image' => $this->image,
            'published_date' => $this->published_date,
        ]);

        Flux::modal('edit-post')->close();
        session()->flash('message', 'Post updated successfully.');
        $this->redirectRoute('admin.posts', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.posts.edit-post');
    }
}
