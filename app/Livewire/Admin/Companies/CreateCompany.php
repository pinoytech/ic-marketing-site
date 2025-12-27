<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Flux\Flux;
use Livewire\Component;

class CreateCompany extends Component
{
    public $name;

    public $logo_path;

    public $display_order;

    public $featured = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'logo_path' => 'nullable|string|max:255',
        'display_order' => 'nullable|integer',
        'featured' => 'required|boolean',
    ];

    public function save()
    {
        $this->validate();

        Company::create([
            'name' => $this->name,
            'logo_path' => $this->logo_path,
            'display_order' => $this->display_order,
            'featured' => $this->featured,
        ]);

        // Reset form fields
        // $this->reset(['title', 'content', 'author', 'image', 'published_date']);
        $this->reset();

        Flux::modal('create-company')->close();
        session()->flash('message', 'Company created successfully.');
        $this->redirectRoute('admin.companies', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.companies.create-company');
    }
}
