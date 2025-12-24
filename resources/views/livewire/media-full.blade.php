{{-- resources/views/livewire/media-full.blade.php --}}
<div class="flex flex-col gap-8 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0">
    {{-- All media in a grid (3 per row) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($media as $medium)
        <div wire:key="media-{{ $medium->id }}" class="flex flex-col gap-4 rounded-xl text-left">
          <div class="rounded-lg">
            <img src="{{ $medium->image }}" alt="{{ $medium->title }}" class="w-full rounded-lg" loading="lazy" />
          </div>
          <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
            <span class="uppercase text-gray-500">{{ \Carbon\Carbon::parse($medium->published_date)->format('F j, Y') }}</span>
          </div>
          <div class="text-sm font-semibold">{{ $medium->title }}</div>
          <div class="text-teal-500 text-xs">
              <a href="{{ $medium->link }}" target="_blank" rel="noopener noreferrer" class="hover:underline">Read more</a>
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
          <span wire:loading.remove wire:target="loadMore">Load more media</span>
          <span wire:loading wire:target="loadMore">Loading...</span>
        </button>
      </div>
    @endif
  </div>
</div>