<?php

namespace App\Livewire;

use App\Models\Event;
use Livewire\Component;

class EventWebinarFull extends Component
{
    public $perPage = 9;

    public $hasMore = true;

    public function loadMore()
    {
        $this->perPage += 9;
    }

    public function render()
    {
        $events = Event::orderBy('event_webinar_date', 'desc')
            ->take($this->perPage)
            ->get();

        $totalEvents = Event::count();
        $this->hasMore = $events->count() < $totalEvents;

        return view('livewire.event-webinar-full', [
            'events' => $events,
            'hasMore' => $this->hasMore,
        ]);
    }
}
