<?php

namespace App\Livewire;

use App\Models\Company;
use Livewire\Component;

class FeatureCompanies extends Component
{
    public $featuredCompanies;

    public $nonFeaturedCompanies;

    public function mount()
    {
        $this->featuredCompanies = Company::where('featured', true)
            ->orderBy('display_order')
            ->get();

        $this->nonFeaturedCompanies = Company::where('featured', false)
            ->orderBy('display_order')
            ->get();
    }

    public function render()
    {
        return view('livewire.feature-companies');
    }
}
