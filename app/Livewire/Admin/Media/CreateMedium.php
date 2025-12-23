<?php

namespace App\Livewire\Admin\Media;

use App\Models\Media;
use Flux\Flux;
use Livewire\Component;

class CreateMedium extends Component
{
    public $title;

    public $published_date;

    public $image;

    public $content;

    public $type;

    protected $rules = [
        'title' => 'required|string|max:255',
        'content' => 'required|string',
        'author' => 'required|string|max:255',
        'image' => 'nullable|url',
        'published_date' => 'required|date',
    ];

    public function save()
    {
        // $this->validate();

        // Post::create([
        //     'title' => $this->title,
        //     'content' => $this->content,
        //     'author' => $this->author,
        //     'image' => $this->image,
        //     'published_date' => $this->published_date,
        // ]);

        // // Reset form fields
        // // $this->reset(['title', 'content', 'author', 'image', 'published_date']);
        // $this->reset();

        // Flux::modal('create-post')->close();
        // session()->flash('message', 'Post created successfully.');
        // $this->redirectRoute('events', navigate: true);

        $this->validate([
            'title' => 'required|string|max:255',
            'published_date' => 'required|date',
            'image' => 'required|string',
            'content' => 'required|string',
            'type' => 'required|string',
        ]);

        Media::create([
            'title' => $this->title,
            'published_date' => $this->published_date,
            'image' => $this->image,
            'content' => $this->content,
            'type' => $this->type,
        ]);

        $this->reset();
        Flux::modal('create-medium')->close();
        session()->flash('message', 'Medium created successfully!');
        $this->redirectRoute('admin.media', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.media.create-medium');
    }
}
