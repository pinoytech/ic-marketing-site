<?php

namespace App\View\Components;

use App\Models\Event;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class EventWebinarPartial extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $events = Event::where('event_webinar_date', '>=', now())
            ->orderBy('event_webinar_date', 'desc')
            ->take(3)
            ->get();

        return view('components.event-webinar-partial', compact('events'));
    }
}
