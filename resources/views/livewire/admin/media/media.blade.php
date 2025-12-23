<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Media') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your media') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-medium">
    <flux:button class='mt-4'>New medium</flux:button>
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
            <th class="text-left p-2">Title</th>
            <th class="text-left p-2">Published Date</th>
            <th class="text-left p-2">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-neutral-900">
          @forelse ($media as $medium)
            <tr class="border-t">
            <td class="p-2">{{ $medium->title }}</td>
            <td class="p-2">{{ \Carbon\Carbon::parse($medium->published_date)->format('F j, Y') }}</td>
            <td class='p-2'>
              <flux:button variant="outline" size="sm" wire:click="edit({{ $medium->id }})">Edit</flux:button>
              <flux:button variant="danger" size="sm" wire:click="delete({{ $medium->id }})">Delete</flux:button>
            </td>
          </tr>
          @empty
            <tr>
              <td colspan="4" class="p-2 text-center">No media found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">
        {{ $media->links() }}
      </div>
    </div>
    <livewire:admin.media.create-medium />
    <livewire:admin.media.edit-medium />
    <flux:modal name="delete-medium" class="min-w-[22rem]">
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Delete medium?</flux:heading>
              <flux:text class="mt-2">
                  You're about to delete this medium.<br>
                  This action cannot be reversed.
              </flux:text>
          </div>
          <div class="flex gap-2">
              <flux:spacer />
              <flux:modal.close>
                  <flux:button variant="ghost" x-on:click="$flux.modal('delete-medium').close()">Cancel</flux:button>
              </flux:modal.close>
              <flux:button type="submit" variant="danger" wire:click="deleteMedium">Delete medium</flux:button>
          </div>
      </div>
    </flux:modal>
</div>
