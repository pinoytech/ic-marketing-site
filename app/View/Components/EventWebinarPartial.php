<?php

namespace App\View\Components;

use Carbon\Carbon;
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
        $events = [
            [
                'id' => 1,
                'title' => 'Webinar: Building a Culture of Well-being',
                'date' => date('Y-m-d', strtotime('July 15, 2025')),
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
            [
                'id' => 2,
                'title' => 'Workshop: Mental Health First Aid for Leaders',
                'date' => date('F d, Y', strtotime('August 10, 2025')),
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
            [
                'id' => 3,
                'title' => 'Panel Discussion: Future of Workplace Wellness',
                'date' => new Carbon('September 5, 2026')->format('F d, Y'),
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
        ];

        return view('components.event-webinar-partial', compact('events'));
    }
}
