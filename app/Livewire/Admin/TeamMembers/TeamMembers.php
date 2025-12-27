<?php

namespace App\Livewire\Admin\TeamMembers;

use App\Models\TeamMember;
use Flux\Flux;
use Livewire\Component;
use Livewire\WithPagination;

class TeamMembers extends Component
{
    use WithPagination;

    public $id;

    public function render()
    {
        $teamMembers = TeamMember::orderBy('display_order', 'asc')->paginate(10);

        return view('livewire.admin.team-members.team-members', [
            'teamMembers' => $teamMembers,
        ]);
    }

    public function edit($id)
    {
        $this->dispatch('edit-team-member', $id);
    }

    public function delete($id)
    {
        $this->id = $id;
        Flux::modal('delete-team-member')->show();
    }

    public function deleteTeamMember()
    {
        // Delete image if it exists
        $teamMember = TeamMember::find($this->id);
        if ($teamMember && $teamMember->photo_path) {
            Storage::disk('resource')->delete($teamMember->photo_path);
        }
        TeamMember::destroy($this->id);
        Flux::modal('delete-team-member')->close();
        session()->flash('message', 'Team member deleted successfully.');
        $this->redirectRoute('admin.team-members', navigate: true);
    }
}
