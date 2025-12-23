<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Flux\Flux;
use Livewire\Component;

class CreateEvent extends Component
{
    public $title;

    public $event_webinar_date;

    public $image;

    public $status = 'upcoming';

    public $register_link;

    public $watch_link;

    public $description;

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
        // $this->redirectRoute('posts', navigate: true);

        $this->validate([
            'title' => 'required|string|max:255',
            'event_webinar_date' => 'required|date',
            'image' => 'required|string',
            'status' => 'required|string',
        ]);

        Event::create([
            'title' => $this->title,
            'event_webinar_date' => $this->event_webinar_date,
            'image' => $this->image,
            'status' => $this->status,
            'register_link' => $this->register_link,
            'watch_link' => $this->watch_link,
            'description' => $this->description,
        ]);

        $this->reset();
        $this->dispatch('modal-close', name: 'create-event');
        session()->flash('message', 'Event created successfully!');
    }

    public function render()
    {
        return view('livewire.admin.events.create-event');
    }
}
