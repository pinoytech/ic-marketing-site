<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Flux\Flux;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditCompany extends Component
{
    use WithFileUploads;

    public $id;

    public $name;

    public $logo_path;

    public $logo;

    public $display_order;

    public $featured;

    // protected $rules = [
    //     'resource_image' => 'image|max:1024', // max 1MB
    // ];

    #[On('edit-company')]
    public function edit($id)
    {
        $company = Company::findOrFail($id);

        $this->id = $company->id;
        $this->name = $company->name;
        $this->logo_path = $company->logo_path;
        $this->display_order = $company->display_order;
        $this->featured = $company->featured;

        Flux::modal('edit-company')->show();
    }

    public function update()
    {
        // dd($this->resource_image);
        $this->validate([
            'name' => 'required|string|max:255',
            'logo_path' => 'nullable|string|max:255',
            'display_order' => 'nullable|integer',
            'featured' => 'required|boolean',
        ]);

        $company = Company::find($this->id);

        if ($this->logo) {
            // Delete old image if it exists
            if ($company->logo_path) {
                Storage::disk('resource')->delete($company->logo_path);
            }
            $filename = time().'_'.$this->logo->getClientOriginalName();
            $this->logo_path = $this->logo->storeAs('logo-images', $filename, 'resource');
        }

        $company->update([
            'name' => $this->name,
            'logo_path' => $this->logo_path,
            'display_order' => $this->display_order,
            'featured' => $this->featured,
        ]);

        Flux::modal('edit-company')->close();
        session()->flash('message', 'Company updated successfully.');
        $this->redirectRoute('admin.companies', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.companies.edit-company');
    }
}
