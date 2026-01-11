<x-layout title='Booking a Discovery Call'>
  <div class="mx-auto bg-icgreen-light flex flex-col gap-12 justify-between items-center w-full">
    <div class="max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-2 md:w-4/9 w-full px-4 md:px-0">
      <div class="bg-yellow-200 p-4 rounded-lg gap-4 mx-auto">
        <p class="font-semibold">This form is for business inquiries only</p>
        <p>For member or employee support, please call +63 917 899 (USAP) or 989 8727 (USAP). For member inquiries, please reach out to <span>info@infinitcare.co</span></p>
      </div>
    </div>
  </div>
  <div class="mx-auto bg-icgreen-light flex flex-col gap-12 justify-between items-center w-full">
    <div class="md:w-4/9 w-full max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-8 px-4 md:px-0">
      <div class="flex items-center justify-center mx-auto">
        <h2 class="text-4xl text-center font-semibold">Book a Discovery Call</h2>
      </div>
      <div class="flex items-center justify-center mx-auto">
        <p class="text-center text-lg">Our sales team will reach out to see if we're a fit or schedule a demo with you.</p>
      </div>
      <livewire:booking-form />
    </div>
  </div>
</x-layout>