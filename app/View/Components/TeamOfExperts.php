<?php

namespace App\View\Components;

use App\Models\TeamMember;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TeamOfExperts extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $teamMembers = TeamMember::orderBy('display_order', 'asc')->get();

        return view('components.team-of-experts', [
            'teamMembers' => $teamMembers,
        ]);
    }
}
