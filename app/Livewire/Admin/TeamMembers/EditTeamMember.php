<?php

namespace App\Livewire\Admin\TeamMembers;

use App\Models\TeamMember;
use Flux\Flux;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditTeamMember extends Component
{
    use WithFileUploads;

    public $id;

    public $name;

    public $photo_path;

    public $position;

    public $photo;

    public $display_order;

    // protected $rules = [
    //     'resource_image' => 'image|max:1024', // max 1MB
    // ];

    #[On('edit-team-member')]
    public function edit($id)
    {
        $teamMember = TeamMember::findOrFail($id);

        $this->id = $teamMember->id;
        $this->name = $teamMember->name;
        $this->photo_path = $teamMember->photo_path;
        $this->position = $teamMember->position;
        $this->display_order = $teamMember->display_order;

        Flux::modal('edit-team-member')->show();
    }

    public function update()
    {
        // dd($this->resource_image);
        $this->validate([
            'name' => 'required|string|max:255',
            'photo_path' => 'nullable|string|max:255',
            'position' => 'nullable|string|max:255',
            'display_order' => 'nullable|integer',
        ]);

        $teamMember = TeamMember::find($this->id);

        if ($this->photo) {
            // Delete old image if it exists
            if ($teamMember->photo_path) {
                Storage::disk('resource')->delete($teamMember->photo_path);
            }
            $filename = time().'_'.$this->photo->getClientOriginalName();
            $this->photo_path = $this->photo->storeAs('photo-images', $filename, 'resource');
        }

        $teamMember->update([
            'name' => $this->name,
            'photo_path' => $this->photo_path,
            'position' => $this->position,
            'display_order' => $this->display_order,
        ]);

        Flux::modal('edit-team-member')->close();
        session()->flash('message', 'Team member updated successfully.');
        $this->redirectRoute('admin.team-members', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.team-members.edit-team-member');
    }
}
