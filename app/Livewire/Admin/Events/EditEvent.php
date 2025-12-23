<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Flux\Flux;
use Livewire\Attributes\On;
use Livewire\Component;

class EditEvent extends Component
{
    public $id;

    public $title;

    public $event_webinar_date;

    public $image;

    public $status = 'upcoming';

    public $register_link;

    public $watch_link;

    public $description;

    #[On('edit-event')]
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        $this->id = $event->id;
        $this->title = $event->title;
        $this->description = $event->description;
        $this->image = $event->image;
        $this->event_webinar_date = $event->event_webinar_date;
        $this->status = $event->status;
        $this->register_link = $event->register_link;
        $this->watch_link = $event->watch_link;

        Flux::modal('edit-event')->show();
    }

    public function update()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|url',
            'event_webinar_date' => 'required|date',
        ]);

        $event = Event::find($this->id);

        $event->update([
            'title' => $this->title,
            'description' => $this->description,
            'image' => $this->image,
            'event_webinar_date' => $this->event_webinar_date,
        ]);

        Flux::modal('edit-event')->close();
        session()->flash('message', 'Event updated successfully.');
        $this->redirectRoute('admin.events', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.events.edit-event');
    }
}
