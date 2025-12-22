<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Posts') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your posts') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <flux:modal.trigger name="create-post">
    <flux:button class='mt-4'>New post</flux:button>
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
            <th class="text-left p-2">Author</th>
            <th class="text-left p-2">Published Date</th>
            <th class="text-left p-2">Actions</th>
          </tr>
        </thead>
        <tbody class="bg-white dark:bg-neutral-900">
          @forelse ($posts as $post)
            <tr class="border-t">
            <td class="p-2">{{ $post->title }}</td>
            <td class="p-2">{{ $post->author }}</td>
            <td class="p-2">{{ \Carbon\Carbon::parse($post->published_date)->format('F j, Y') }}</td>
            <td class='p-2'>
              <flux:button variant="outline" size="sm" wire:click="edit({{ $post->id }})">Edit</flux:button>
              <flux:button variant="danger" size="sm" wire:click="delete({{ $post->id }})">Delete</flux:button>
            </td>
          </tr>
          @empty
            <tr>
              <td colspan="4" class="p-2 text-center">No posts found.</td>
            </tr>
          @endforelse
        </tbody>
      </table>
      <div class="mt-4">
        {{ $posts->links() }}
      </div>
    </div>
    <livewire:auth.create-post />
    <livewire:auth.edit-post />
    <flux:modal name="delete-post" class="min-w-[22rem]">
      <div class="space-y-6">
          <div>
              <flux:heading size="lg">Delete post?</flux:heading>
              <flux:text class="mt-2">
                  You're about to delete this post.<br>
                  This action cannot be reversed.
              </flux:text>
          </div>
          <div class="flex gap-2">
              <flux:spacer />
              <flux:modal.close>
                  <flux:button variant="ghost">Cancel</flux:button>
              </flux:modal.close>
              <flux:button type="submit" variant="danger" wire:click="deletePost">Delete post</flux:button>
          </div>
      </div>
    </flux:modal>
</div>
