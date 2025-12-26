<?php

namespace App\View\Components;

use App\Models\Media;
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
        $media = Media::orderBy('published_date', 'desc')->take(3)->get();

        return view('components.media-partial', ['media' => $media]);
    }
}
