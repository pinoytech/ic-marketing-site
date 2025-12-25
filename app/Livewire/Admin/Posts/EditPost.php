<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Post;
use Flux\Flux;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditPost extends Component
{
    use WithFileUploads;

    public $id;

    public $title;

    public $content;

    public $author;

    public $image;

    public $published_date;

    public $resource_image;

    public $resource_image_path;

    // protected $rules = [
    //     'resource_image' => 'image|max:1024', // max 1MB
    // ];

    #[On('edit-post')]
    public function edit($id)
    {
        $post = Post::findOrFail($id);

        $this->id = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;
        $this->author = $post->author;
        $this->image = $post->image;
        $this->resource_image_path = $post->resource_image_path;
        $this->published_date = $post->published_date;

        Flux::modal('edit-post')->show();
    }

    public function update()
    {
        // dd($this->resource_image);
        $this->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'author' => 'required|string|max:255',
            'image' => 'nullable|url',
            'published_date' => 'required|date',
            'resource_image' => 'nullable|image|max:1024',
        ]);

        $post = Post::find($this->id);

        if ($this->resource_image) {
            // Delete old image if it exists
            if ($post->resource_image_path) {
                Storage::disk('resource')->delete($post->resource_image_path);
            }
            $filename = time().'_'.$this->resource_image->getClientOriginalName();
            $this->resource_image_path = $this->resource_image->storeAs('resource-images', $filename, 'resource');
        }

        $post->update([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
            'image' => $this->image,
            'published_date' => $this->published_date,
            'resource_image_path' => $this->resource_image_path,
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
