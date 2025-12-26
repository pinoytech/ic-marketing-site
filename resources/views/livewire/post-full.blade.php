{{-- resources/views/livewire/event-webinar-full.blade.php --}}
<div class="flex flex-col gap-8 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0">
    {{-- All events in a grid (3 per row) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($posts as $post)
        <div wire:key="post-{{ $post->id }}" class="flex flex-col gap-4 rounded-xl text-left">
          <div class="rounded-lg">
          @if($post->image)
            <img src="{{ Storage::disk('resource')->url($post->image->path) }}" alt="{{ $post->title }}" class="w-full max-h-[200px] object-cover rounded-lg" loading="lazy" />
          @else
            <img src="http://dummyimage.com/315x200/000/fff" alt="{{ $post->title }}" class="w-full rounded-lg" loading="lazy" />
          @endif
            
          </div>
          <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
            @if(\Carbon\Carbon::parse($post->published_date)->isFuture())
              <div>
                <span class="text-white bg-teal-700 uppercase p-2 rounded-lg">Upcoming</span>
              </div>
            @endif
            <span class="uppercase text-gray-500">{{ \Carbon\Carbon::parse($post->published_date)->format('F j, Y') }}</span>
          </div>
          <div class="text-sm font-semibold">{{ $post->title }}</div>
          <div class="text-teal-500 text-xs">
            <a href="/post/{{ $post->id }}" class="hover:underline">Read more</a>
          </div>
        </div>
      @endforeach
    </div>

    @include('resources.partials.load-more', ['hasMore' => $hasMore, 'wireClick' => 'loadMore', 'label' => 'Load more'])
  </div>
</div>