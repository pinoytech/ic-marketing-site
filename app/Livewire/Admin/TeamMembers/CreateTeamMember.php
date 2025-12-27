<?php

namespace App\Livewire\Admin\TeamMembers;

use App\Models\TeamMember;
use Flux\Flux;
use Livewire\Component;

class CreateTeamMember extends Component
{
    public $name;

    public $photo;

    public $photo_path;

    public $display_order;

    public $featured = false;

    protected $rules = [
        'name' => 'required|string|max:255',
        'photo_path' => 'nullable|string|max:255',
        'display_order' => 'nullable|integer',
    ];

    public function save()
    {
        $this->validate();

        TeamMember::create([
            'name' => $this->name,
            'photo_path' => $this->photo_path,
            'display_order' => $this->display_order,
        ]);

        // Reset form fields
        // $this->reset(['title', 'content', 'author', 'image', 'published_date']);
        $this->reset();

        Flux::modal('create-team-member')->close();
        session()->flash('message', 'Team member created successfully.');
        $this->redirectRoute('admin.team-members', navigate: true);
    }

    public function render()
    {
        return view('livewire.admin.team-members.create-team-member');
    }
}
