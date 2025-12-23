<?php

namespace App\Livewire\Admin\Events;

use App\Models\Event;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class Events extends Component
{
    use WithPagination;

    public $id;

    public function render()
    {
        $events = Event::orderBy('event_webinar_date', 'desc')->paginate(10);

        return view('livewire.admin.events.events', [
            'events' => $events,
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('edit-event', $id);
    }

    public function delete($id)
    {
        $this->id = $id;
        Flux::modal('delete-event')->show();
    }

    public function deleteEvent()
    {
        Event::destroy($this->id);
        Flux::modal('delete-event')->close();
        session()->flash('message', 'Event deleted successfully.');
        $this->redirectRoute('admin.events', navigate: true);
    }
}
