<div class="flex flex-col gap-4 items-center justify-center">
  @session('success')
    <div
        x-data="{show: true}"
        x-show="show"
        x-init="setTimeout(() => { show = false }, 3000)"
        class="fixed top-5 right-5 bd-white md:bg-green-200 text-green-800 text-sm p-4 text-center rounded-lg shadow-lg z-50"
        role="alert">
        <p>{{ $value }}</p>
    </div>
  @endsession('success')

  <div class="bg-white md:p-12 p-4 rounded-lg shadow-md border-1 border-gray-100">
    <form wire:submit.prevent="submit" class="flex flex-col gap-6">
      <div class="flex flex-col">
        <label for="name" class="mb-2 font-medium text-sm">Full Name</label>
        <input type="text" id="name" name="name" wire:model="name" class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
        @error('name') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col">
          <label for="mobile" class="mb-2 font-medium text-sm">Mobile number</label>
          <input type="text" id="mobile" name="mobile" wire:model="mobile" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
          @error('mobile') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col">
          <label for="email" class="mb-2 font-medium text-sm">Email address</label>
          <input type="email" id="email" name="email" wire:model="email" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
          @error('email') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col">
          <label for="company" class="mb-2 font-medium text-sm">Company</label>
          <input type="text" id="company" name="company" wire:model="company" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
          @error('company') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col">
          <label for="position" class="mb-2 font-medium text-sm">Position</label>
          <input type="text" id="position" name="position" wire:model="position" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
          @error('position') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="flex flex-col">
          <label for="employees" class="mb-2 font-medium text-sm">No. of employees</label>
          <select id="employees" name="employees" wire:model="employees" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option value="" disabled selected>Select an option</option>
            <option value="small-business">Small Business (1-50 employees)</option>
            <option value="medium-business">Medium Business (51-200 employees)</option>
            <option value="large-business">Large Business (201+ employees)</option>
          </select> 
          @error('employees') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
        <div class="flex flex-col">
          <label for="referral" class="mb-2 font-medium text-sm">How did you hear about us?</label>
          <select id="referral" name="referral" wire:model="referral" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500">
            <option value="" disabled selected>Select an option</option>
            <option value="social-media">Social Media</option>
            <option value="referral">Referral</option>
            <option value="search-engine">Search Engine</option>
            <option value="other">Other</option>
          </select>
          @error('referral') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
        </div>
      </div>
      <div class="flex flex-col">
        <label for="message" class="mb-2 font-medium text-sm">Message</label>
        <textarea id="message" name="message" wire:model="message" rows="4" placeholder="How can we help?" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
        @error('message') <span class="text-red-600 text-sm mt-1">{{ $message }}</span> @enderror
      </div>
      <button type="submit" class="h-12 bg-teal-700 text-white font-semibold px-4 py-2 rounded-lg hover:bg-teal-800 transition">Submit</button>
    </form>
  </div>
</div>