<div>
  @if($showBanner)
    <div class="fixed bottom-0 left-0 right-0 bg-gray-900 text-white p-4 md:p-6 shadow-lg z-50">
      <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4 flex-1">
          <img src="/images/CORSeal2.png" alt="Cookie Policy Badge" class="h-12 md:h-16  flex-shrink-0" />
          <p class="text-sm md:text-base">
            We use cookies to enhance your browsing experience, serve personalized content, and analyze our traffic. 
            By clicking "Accept All", you consent to our use of cookies. 
            <a href="/privacy-policy" class="underline hover:text-teal-400">Learn more</a>
          </p>
        </div>
        <div class="flex gap-3 flex-shrink-0">
          <button 
            wire:click="reject" 
            class="px-4 py-2 text-sm font-semibold border border-white rounded-lg hover:bg-white hover:text-gray-900 transition"
          >
            Reject
          </button>
          <button 
            wire:click="accept" 
            class="px-4 py-2 text-sm font-semibold bg-teal-700 rounded-lg hover:bg-teal-800 transition"
          >
            Accept All
          </button>
        </div>
      </div>
    </div>
  @endif
</div>