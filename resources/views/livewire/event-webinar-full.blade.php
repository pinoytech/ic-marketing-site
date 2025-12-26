{{-- resources/views/livewire/event-webinar-full.blade.php --}}
<div class="flex flex-col gap-8 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0">
    {{-- All events in a grid (3 per row) --}}
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      @foreach($events as $event)
        <div wire:key="event-{{ $event->id }}" class="flex flex-col gap-4 rounded-xl text-left">
          <div class="rounded-lg">
          @if($event->image)
            <img src="{{ Storage::disk('resource')->url($event->image->path) }}" alt="{{ $event->title }}" class="w-full max-h-[200px] object-cover rounded-lg" loading="lazy" />
          @else
            <img src="http://dummyimage.com/600x400/000/fff" alt="{{ $event->title }}" class="w-full rounded-lg" loading="lazy" />
          @endif
          </div>
          <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
            @if(\Carbon\Carbon::parse($event->event_webinar_date)->isFuture())
              <div>
                <span class="text-white bg-teal-700 uppercase p-2 rounded-lg">Upcoming</span>
              </div>
            @endif
            <span class="uppercase text-gray-500">{{ \Carbon\Carbon::parse($event->event_webinar_date)->format('F j, Y') }}</span>
          </div>
          <div class="text-sm font-semibold">{{ $event->title }}</div>
          <div class="text-teal-500 text-xs">
            @if(\Carbon\Carbon::parse($event->event_webinar_date)->isFuture() && $event->register_link)
              <a href="{{ $event->register_link }}" class="hover:underline">Register</a>
            @elseif(\Carbon\Carbon::parse($event->event_webinar_date)->isPast() && $event->watch_link)
              <a href="{{ $event->watch_link }}" class="hover:underline">Watch Recording</a>
            @endif
          </div>
        </div>
      @endforeach
    </div>

    @include('resources.partials.load-more', ['hasMore' => $hasMore, 'wireClick' => 'loadMore', 'label' => 'Load more'])
  </div>
</div>