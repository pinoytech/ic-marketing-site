{{-- Load More Button --}}
@if($hasMore)
  <div class="mt-8 flex justify-center">
    <button 
      wire:click="loadMore" 
      wire:loading.attr="disabled"
      wire:loading.class="opacity-50"
      class="h-12 cursor-pointer font-semibold text-sm px-8 bg-white hover:bg-teal-800 hover:text-white text-teal-700 rounded-lg transition-colors border border-teal-700 flex items-center justify-center gap-2"
    >
      <span wire:loading.remove wire:target="$loadMore">{{ $label }}</span>
      <span wire:loading wire:target="$loadMore">Loading...</span>
    </button>
  </div>
@endif