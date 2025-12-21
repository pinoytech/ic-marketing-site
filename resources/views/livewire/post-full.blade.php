{{-- resources/views/livewire/event-webinar-full.blade.php --}}
<div class="flex flex-col gap-8 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0">
    {{-- All events in a grid (3 per row) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($posts as $post)
        <div wire:key="post-{{ $post->id }}" class="flex flex-col gap-4 rounded-xl text-left">
          <div class="rounded-lg">
            <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full rounded-lg" loading="lazy" />
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

    {{-- Load More Button --}}
    @if($hasMore)
      <div class="mt-8 flex justify-center">
        <button 
          wire:click="loadMore" 
          wire:loading.attr="disabled"
          wire:loading.class="opacity-50"
          class="h-12 cursor-pointer font-semibold text-sm px-8 bg-teal-700 hover:bg-teal-800 text-white border-transparent rounded-lg transition-colors"
        >
          <span wire:loading.remove wire:target="loadMore">Load more posts</span>
          <span wire:loading wire:target="loadMore">Loading...</span>
        </button>
      </div>
    @endif
  </div>
</div>