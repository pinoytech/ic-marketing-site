<x-layout>
  <div class="flex flex-col gap-8 my-auto justify-center items-center w-full">
    <div class="w-full max-w-screen-xl mx-auto pt-8 px-4 md:px-0 md:pt-12 flex flex-col">
      <div class="flex flex-col gap-8 text-left">
        <a href='{{ route('resources.index') }}' class='text-teal-500 text-sm'>&larr; Back to Resources</a>
        <h2 class="text-4xl font-semibold text-left mb-8">Posts</h2>
      </div>
    </div>
  </div>
  @livewire('post-full')
  <x-semi-footer-transform />
</x-layout>