<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class BlogsPartial extends Component
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
        $posts = [
            [
                'id' => 1,
                'title' => '5 Strategies to Enhance Employee Well-being in the Workplace',
                'date' => 'June 20, 2024',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
            [
                'id' => 2,
                'title' => 'The Role of Leadership in Promoting Mental Health at Work',
                'date' => 'May 15, 2024',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
            [
                'id' => 3,
                'title' => 'How Data-Driven Insights Can Transform Workplace Wellness Programs',
                'date' => 'April 10, 2026',
                'image' => 'http://dummyimage.com/315x197.png/09f/fff',
            ],
        ];

        return view('components.blogs-partial', ['posts' => $posts]);
    }
}
