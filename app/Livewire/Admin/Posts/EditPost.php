<?php

namespace App\Livewire\Admin\Posts;

use App\Models\Image;
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

    public $image_file;

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
            'published_date' => 'required|date',
            'resource_image' => 'nullable|image|max:1024',
            'image_file' => 'nullable|image|max:1024',
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

        if ($this->image_file) {
            // Delete old image file from storage
            if ($post->image) {
                Storage::disk('resource')->delete($post->image->path);
                $post->image->delete();
            }

            // Upload new file
            $filename = time().'_'.$this->image_file->getClientOriginalName();
            $path = $this->image_file->storeAs('images', $filename, 'resource');

            // Create new polymorphic Image record
            $post->image()->create([
                'path' => $path,
            ]);
        }
        // if ($this->image_file) {
        //     // Delete old polymorphic Image record if exists
        //     if ($post->image) {
        //         $post->image->delete();
        //     }

        //     // // Create new Image record
        //     // $image = new Image();
        //     // $imageFilename = time().'_'.$this->image->getClientOriginalName();
        //     // $imagePath = $this->image->storeAs('post-images', $imageFilename, 'resource');
        //     // $image->path = $imagePath;
        //     // $image->imageable_type = Post::class;
        //     // $image->imageable_id = $post->id;
        //     // $image->save();

        //     $imageFilename = time().'_'.$this->image->getClientOriginalName();
        //     $imagePath = $this->image->storeAs('post-images', $imageFilename, 'resource');
        //     $post->image()->create([
        //         'path' => $imagePath,
        //     ]);

        // }

        $post->update([
            'title' => $this->title,
            'content' => $this->content,
            'author' => $this->author,
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
