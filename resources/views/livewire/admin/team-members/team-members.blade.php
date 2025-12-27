<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Team Members') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your team members') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-team-member">
    <flux:button class='mt-4'>New team member</flux:button>
    </flux:modal.trigger>

    @session('message')
    <div
        x-data="{show: true}"
        x-show="show"
        x-init="setTimeout(() => { show = false }, 3000)"
        class="fixed top-5 right-5 bg-green-600 text-white text-sm p-4 rounded-lg shadow-lg z-50"
        role="alert">
        <p>{{ $value }}</p>
    </div>
    @endsession('message')

    <div class="overflow-x-auto">
      <table class="w-full mt-6 table-auto border-collapse border border-neutral-200 dark:border-neutral-700">
        <thead class="bg-neutral-50 dark:bg-neutral-800">
          <tr class="border-b border-neutral-200 dark:border-neutral-700">
            <th class="text-left p-2">Name</th>
            <th class="text-left p-2">Position</th>
            <th class="text-left p-2">Display Order</th>
            <th class="text-left p-2">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-neutral-900">
          @forelse ($teamMembers as $teamMember)
            <tr class="border-t">
            <td class="p-2">{{ $teamMember->name }}</td>
            <td class="p-2">{{ $teamMember->position }}</td>
            <td class="p-2">{{ $teamMember->display_order }}</td>
            <td class='p-2'>
              <flux:button variant="outline" size="sm" wire:click="edit({{ $teamMember->id }})">Edit</flux:button>
              <flux:button variant="danger" size="sm" wire:click="delete({{ $teamMember->id }})">Delete</flux:button>
            </td>
          </tr>
          @empty
            <tr>
              <td colspan="5" class="p-2 text-center">No team members found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">
        {{ $teamMembers->links() }}
      </div>
    </div>
    <livewire:admin.team-members.create-team-member />
    <livewire:admin.team-members.edit-team-member />
    <flux:modal name="delete-team-member" class="min-w-[22rem]">
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Delete team member?</flux:heading>
              <flux:text class="mt-2">
                  You're about to delete this company.<br>
                  This action cannot be reversed.
              </flux:text>
          </div>
          <div class="flex gap-2">
              <flux:spacer />
              <flux:modal.close>
                  <flux:button variant="ghost" x-on:click="$flux.modal('delete-team-member').close()">Cancel</flux:button>
              </flux:modal.close>
              <flux:button type="submit" variant="danger" wire:click="deleteTeamMember">Delete team member</flux:button>
          </div>
      </div>
    </flux:modal>
</div>
