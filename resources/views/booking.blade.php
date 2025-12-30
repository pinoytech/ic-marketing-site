<x-layout title='Booking a Discovery Call'>
  <div class="md:bg-transparent bg-icgreen-light flex flex-col gap-12 justify-between items-center w-full">
    <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-2">
      <div class="bg-yellow-200 p-4 rounded-lg flex flex-col gap-4 w-11/12 md:w-3/5 lg:w-4/5 mx-auto">
        <p class="font-semibold">This form is for business inquiries only</p>
        <p>For member or employee support, please call +63 917 899 (USAP) or 989 8727 (USAP). For member inquiries, please reach out to <span>info@infinitcare.co</span></p>
      </div>
    </div>
  </div>
  <div class="md:bg-transparent bg-icgreen-light flex flex-col gap-12 justify-between items-center w-11/12 md:w-3/5 lg:w-full mx-auto">
    <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-8">
      <div class="flex items-center justify-center">
        <h2 class="text-4xl text-center font-semibold">Book a Discovery Call</h2>
      </div>
      <div>
        <p class="text-center text-lg">Our sales team will reach out to see if we're a fit or schedule a demo with you.</p>
      </div>
      <livewire:booking-form />
    </div>
  </div>
</x-layout>