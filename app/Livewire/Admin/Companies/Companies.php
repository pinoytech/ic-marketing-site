<?php

namespace App\Livewire\Admin\Companies;

use App\Models\Company;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class Companies extends Component
{
    use WithPagination;

    public $id;

    public function render()
    {
        $companies = Company::orderBy('display_order', 'asc')->paginate(10);

        return view('livewire.admin.companies.companies', [
            'companies' => $companies,
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('edit-company', $id);
    }

    public function delete($id)
    {
        $this->id = $id;
        Flux::modal('delete-company')->show();
    }

    public function deleteCompany()
    {
        // Delete image if it exists
        $company = Company::find($this->id);
        if ($company && $company->logo_path) {
            Storage::disk('resource')->delete($company->logo_path);
        }
        Company::destroy($this->id);
        Flux::modal('delete-company')->close();
        session()->flash('message', 'Company deleted successfully.');
        $this->redirectRoute('admin.companies', navigate: true);
    }
}
