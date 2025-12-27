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
            ->orderByRaw('display_order IS NULL, display_order ASC')
            ->get();

        $this->nonFeaturedCompanies = Company::where('featured', false)
            ->orderByRaw('display_order IS NULL, display_order ASC')
            ->get();
    }

    public function render()
    {
        return view('livewire.feature-companies');
    }
}
