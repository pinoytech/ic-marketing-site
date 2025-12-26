<div class="flex flex-col gap-4 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col">
    <div class="flex flex-row gap-4 justify-start items-center">
      <h2 class="text-2xl font-semibold text-center">Events &amp; webinars</h2>
      <a href={{ route('resources.events-webinar') }} class="text-xs text-teal-500 font-semibold hover:underline">See all &rarr;</a>
    </div>
  </div>
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row gap-8">
    @foreach ($events as $event)
      <div wire:key="event-{{ $event->id }}" class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl text-left">
        <div class="rounded-lg">
          @if($event->resource_image_path)
            <img src="{{ Storage::disk('resource')->url($event->resource_image_path) }}" alt="{{ $event->title }}" class='w-full max-h-[200px] object-cover rounded-lg' loading="lazy" />
          @else
          <img src="{{ $event->image }}" class='w-full rounded-lg' />
          @endif
        </div>
        <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
          @if(strtotime($event->event_webinar_date) >= strtotime(date('Y-m-d')))
            <div>
              <span class="text-white bg-teal-700 uppercase p-2 rounded-lg">Upcoming</span>
            </div>
          @endif
          <span class='uppercase text-gray-500'>{{ $event->event_webinar_date }}</span>
        </div>
        <div class="text-sm font-semibold">{{ $event->title }}</div>
        <div class="text-teal-500 text-xs"><a href='#'>Register</a></div>
      </div>
    @endforeach
  </div>
</div>