<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MediaPartial extends Component
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
        $media = [
            [
                'id' => 1,
                'title' => 'InfinitCare Featured in HR Tech Weekly',
                'date' => 'June 20, 2024',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
                'link' => 'https://hrtechweekly.com/infinitcare-featured-article',
            ],
            [
                'id' => 2,
                'title' => 'Podcast: The Future of Employee Well-being with InfinitCare',
                'date' => 'May 15, 2024',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
                'link' => 'https://podcasts.example.com/future-of-employee-wellbeing',
            ],
            [
                'id' => 3,
                'title' => 'InfinitCare in Forbes: Revolutionizing Workplace Wellness',
                'date' => 'April 10, 2024',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
                'link' => 'https://forbes.com/infinitcare-workplace-wellness',
            ],
        ];

        return view('components.media-partial', ['media' => $media]);
    }
}
