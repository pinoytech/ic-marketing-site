<?php

namespace App\Livewire;

use App\Models\Media;
use Livewire\Component;

class MediaFull extends Component
{
    public $perPage = 9;

    public $hasMore = true;

    public function loadMore()
    {
        $this->perPage += 9;
    }

    public function render()
    {
        $media = Media::orderBy('published_date', 'desc')
            ->take($this->perPage)
            ->get();

        $totalMedia = Media::count();
        $this->hasMore = $media->count() < $totalMedia;

        return view('livewire.media-full', [
            'media' => $media,
            'hasMore' => $this->hasMore,
        ]);
    }
}
