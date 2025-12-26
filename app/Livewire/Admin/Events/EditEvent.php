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

    public $resource_image;

    public $resource_image_path;

    #[On('edit-event')]
    public function edit($id)
    {
        $event = Event::findOrFail($id);

        $this->id = $event->id;
        $this->title = $event->title;
        $this->description = $event->description;
        $this->image = $event->image;
        $this->resource_image_path = $event->resource_image_path;
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
            'resource_image' => 'nullable|image|max:1024',
        ]);

        $event = Event::find($this->id);

        if ($this->resource_image) {
            // Delete old image if it exists
            if ($event->resource_image_path) {
                Storage::disk('resource')->delete($event->resource_image_path);
            }
            $filename = time().'_'.$this->resource_image->getClientOriginalName();
            $this->resource_image_path = $this->resource_image->storeAs('resource-images', $filename, 'resource');
        }

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
