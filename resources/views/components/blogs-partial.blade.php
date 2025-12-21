<div class="flex flex-col gap-4 my-auto justify-center items-center w-full mb-8">
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col">
    <div class="flex flex-row gap-4 justify-start items-center">
      <h2 class="text-2xl font-semibold text-center">Blogs</h2>
      <a href="" class="text-xs text-teal-500 font-semibold hover:underline" target="_blank">See all &rarr;</a>
    </div>
  </div>
  <div class="w-full max-w-screen-xl mx-auto px-4 md:px-0 flex flex-col md:flex-row gap-8">
    @foreach ($posts as $post)
      <div wire:key="post-{{ $post['id'] }}" class="flex flex-col gap-4 w-full md:w-1/3 mx-auto rounded-xl text-left">
        <div class="rounded-lg bg-gray-500">
          <img src="{{ $post['image'] }}" class='w-full rounded-lg' />
        </div>
        <div class="text-sm font-semibold flex flex-col md:items-center md:flex-row gap-4 justify-start">
          @if(strtotime($post['date']) >= strtotime(date('Y-m-d')))
            <div>
              <span class="text-white bg-teal-700 uppercase p-2 rounded-lg">Upcoming</span>
            </div>
          @endif
          <span class='uppercase text-gray-500'>{{ $post['date'] }}</span>
        </div>
        <div class="text-sm font-semibold">{{ $post['title'] }}</div>
        <div class="text-teal-500 text-xs"><a href='#'>Read more</a></div>
      </div>
    @endforeach
  </div>
</div>