<div class="flex flex-col md:gap-8 justify-between items-center w-full gap-0">
  <div class="w-full max-w-screen-xl mx-auto py-4 md:py-2text-left h-full px-4 md:px-0">
    <h3 class="text-lg md:text-3xl text-black-900 font-semibold">Meet our team of experts</h3>
  </div>
  <div class="w-full max-w-screen-xl mx-auto py-4 md:py-2 flex flex-col md:flex-row justify-between gap-8 text-left h-full px-4 md:px-0">
    @foreach($teamMembers as $teamMember)
      <div class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl shadow-md text-left border-1 border-gray-200 p-4">
        @if($teamMember->photo_path)
          <img src="{{ Storage::disk('resource')->url($teamMember->photo_path) }}" alt="{{ $teamMember->name }}" class='w-full h-96 object-cover rounded-lg' loading="lazy" />
        @else
          <div class="rounded-lg bg-gray-500 h-96">
            
          </div>
        @endif
        <p class="uppercase text-sm font-semibold">{{ $teamMember->name }}</p>
        <p class="text-gray-800 text-xs">{{ $teamMember->position }}</p>
      </div>
    @endforeach
  </div>
  <div class="w-full max-w-screen-xl mx-auto py-4 md:py-2 flex flex-col md:flex-row justify-between gap-8 text-left h-full px-4 md:px-0">
    <div class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl shadow-md text-left border-1 border-gray-200 p-4">
      <div class="rounded-lg bg-gray-500 h-96">
      </div>
      <p class="uppercase text-sm font-semibold">First name, Last name</p>
      <p class="text-gray-800 text-xs">Position</p>
    </div>
    <div class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl shadow-md text-left border-1 border-gray-200 p-4">
      <div class="rounded-lg bg-gray-500 h-96">
      </div>
      <p class="uppercase text-sm font-semibold">First name, Last name</p>
      <p class="text-gray-800 text-xs">Position</p>
    </div>
    <div class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl shadow-md text-left border-1 border-gray-200 p-4">
      <div class="rounded-lg bg-gray-500 h-96">
      </div>
      <p class="uppercase text-sm font-semibold">First name, Last name</p>
      <p class="text-gray-800 text-xs">Position</p>
    </div>
  </div>
</div>