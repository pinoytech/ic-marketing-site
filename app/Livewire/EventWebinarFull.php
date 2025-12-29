<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventWebinarFull extends Component
{
    public $events = [];

    public $perPage = 9;

    public $offset = 0;

    public $hasMore = true;

    public function mount()
    {
        $this->loadInitial();
    }

    public function loadInitial()
    {
        $this->events = Event::with('image')
            ->orderBy('event_webinar_date', 'desc')
            ->take($this->perPage)
            ->get();

        $this->offset = $this->events->count();
        $totalEvents = Event::count();
        $this->hasMore = $this->offset < $totalEvents;
    }

    public function loadMore()
    {
        $newEvents = Event::with('image')
            ->orderBy('event_webinar_date', 'desc')
            ->skip($this->offset)
            ->take($this->perPage)
            ->get();

        $this->events = $this->events->concat($newEvents);
        $this->offset += $newEvents->count();

        $totalEvents = Event::count();
        $this->hasMore = $this->offset < $totalEvents;
    }

    public function render()
    {
        return view('livewire.event-webinar-full');
    }
}
