<div class="relative mb-6 w-full">
    <flux:heading size="xl" level="1">{{ __('Posts') }}</flux:heading>
    <flux:subheading size="lg" class="mb-6">{{ __('Manage your posts') }}</flux:subheading>
    <flux:separator variant="subtle" />

    <div>
      <table>
        <thead>
          <tr>
            <th class="text-left p-2">Title</th>
            <th class="text-left p-2">Author</th>
            <th class="text-left p-2">Published Date</th>
          </tr>
        </thead>
        <tbody>
          @foreach($posts as $post)
          <tr class="border-t">
            <td class="p-2">{{ $post->title }}</td>
            <td class="p-2">{{ $post->author }}</td>
            <td class="p-2">{{ \Carbon\Carbon::parse($post->published_date)->format('F j, Y') }}</td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    <livewire:auth.create-post />
</div>
