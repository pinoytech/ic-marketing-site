<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Companies') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your companies') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-company">
    <flux:button class='mt-4'>New company</flux:button>
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
            <th class="text-left p-2">Display Order</th>
            <th class="text-left p-2">Featured</th>
            <th class="text-left p-2">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-neutral-900">
          @forelse ($companies as $company)
            <tr class="border-t">
            <td class="p-2">{{ $company->name }}</td>
            <td class="p-2">{{ $company->display_order }}</td>
            <td class="p-2">{{ $company->featured }}</td>
            <td class='p-2'>
              <flux:button variant="outline" size="sm" wire:click="edit({{ $company->id }})">Edit</flux:button>
              <flux:button variant="danger" size="sm" wire:click="delete({{ $company->id }})">Delete</flux:button>
            </td>
          </tr>
          @empty
            <tr>
              <td colspan="5" class="p-2 text-center">No companies found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">
        {{ $companies->links() }}
      </div>
    </div>
    <livewire:admin.companies.create-company />
    <livewire:admin.companies.edit-company />
    <flux:modal name="delete-company" class="min-w-[22rem]">
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Delete company?</flux:heading>
              <flux:text class="mt-2">
                  You're about to delete this company.<br>
                  This action cannot be reversed.
              </flux:text>
          </div>
          <div class="flex gap-2">
              <flux:spacer />
              <flux:modal.close>
                  <flux:button variant="ghost" x-on:click="$flux.modal('delete-company').close()">Cancel</flux:button>
              </flux:modal.close>
              <flux:button type="submit" variant="danger" wire:click="deleteCompany">Delete company</flux:button>
          </div>
      </div>
    </flux:modal>
</div>
