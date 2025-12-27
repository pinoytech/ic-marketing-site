<?php

namespace App\Livewire;

use Livewire\Component;

class CookieBanner extends Component
{
    public $showBanner = false;

    public function mount()
    {
        // Check if user has already accepted/rejected cookies
        $this->showBanner = ! request()->cookie('cookie_consent');
    }

    public function accept()
    {
        cookie()->queue('cookie_consent', 'accepted', 60 * 24 * 365); // 1 year
        $this->showBanner = false;
    }

    public function reject()
    {
        cookie()->queue('cookie_consent', 'rejected', 60 * 24 * 365); // 1 year
        $this->showBanner = false;
    }

    public function render()
    {
        return view('livewire.cookie-banner');
    }
}
