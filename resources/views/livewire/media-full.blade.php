{{-- resources/views/livewire/media-full.blade.php --}}
<div class="flex flex-col gap-8 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0">
    {{-- All media in a grid (3 per row) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($media as $medium)
        <div wire:key="media-{{ $medium->id }}" class="flex flex-col gap-4 rounded-xl text-left">
          <div class="rounded-lg">
          @if($medium->image)
            <img src="{{ Storage::disk('resource')->url($medium->image->path) }}" alt="{{ $medium->title }}" class="w-full max-h-[200px] object-cover rounded-lg" loading="lazy" />
          @else
            <img src="http://dummyimage.com/600x400/000/fff" alt="{{ $medium->title }}" class="w-full rounded-lg" loading="lazy" />
          @endif
          </div>
          <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
            <span class="uppercase text-gray-500">{{ \Carbon\Carbon::parse($medium->published_date)->format('F j, Y') }}</span>
          </div>
          <div class="text-sm font-semibold">{{ $medium->title }}</div>
          <div class="text-teal-500 text-[14px] font-semibold hover:underline">
              <a href="{{ $medium->link }}" target="_blank" rel="noopener noreferrer" class="text-teal-500 text-[14px] font-semibold hover:underline">Read more</a>
          </div>
        </div>
      @endforeach
    </div>

    @include('resources.partials.load-more', ['hasMore' => $hasMore, 'wireClick' => 'loadMore', 'label' => 'Load more'])
  </div>
</div>