<x-layout title='About us'>
  <div class="flex flex-col gap-12 justify-between items-center w-full">
    <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-2">
      <div class="bg-yellow-200 p-4 rounded-lg flex flex-col gap-4 w-11/12 md:w-3/5 lg:w-4/5 mx-auto">
        <p class="font-semibold">This form is for business inquiries only</p>
        <p>For member or employee support, please call +63 917 899 (USAP) or 989 8727 (USAP). For member inquiries, please reach out to <span>info@infinitcare.co</span></p>
      </div>
    </div>
  </div>
  <div class="flex flex-col gap-12 justify-between items-center w-11/12 md:w-3/5 lg:w-full mx-auto">
    <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col justify-between gap-8">
      <div class="flex items-center justify-center">
        <h2 class="text-4xl text-center font-semibold">Book a Discovery Call</h2>
      </div>
      <div>
        <p class="text-center text-lg">Our sales team will reach out to see if we're a fit or schedule a demo with you.</p>
      </div>
      <div class="flex items-center justify-center">
        <div class="bg-white md:p-12 p-4 rounded-lg shadow-md border-1 border-gray-100 md:w-3/4 lg:w-3/5">
          <form action="" method="POST" class="flex flex-col gap-6">
            <div class="flex flex-col">
              <label for="name" class="mb-2 font-medium text-sm">Full Name</label>
              <input type="text" id="name" name="name" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="flex flex-col">
                <label for="email" class="mb-2 font-medium text-sm">Mobile number</label>
                <input type="email" id="email" name="email" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
              </div>
              <div class="flex flex-col">
                <label for="company" class="mb-2 font-medium text-sm">Email address</label>
                <input type="text" id="company" name="company" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="flex flex-col">
                <label for="email" class="mb-2 font-medium text-sm">Company</label>
                <input type="email" id="email" name="email" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
              </div>
              <div class="flex flex-col">
                <label for="company" class="mb-2 font-medium text-sm">Position</label>
                <input type="text" id="company" name="company" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"/>
              </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div class="flex flex-col">
                <label for="email" class="mb-2 font-medium text-sm">No. of employees</label>
                <select id="email" name="email" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500">
                  <option value="" disabled selected>Select an option</option>
                  <option value="small-business">Small Business (1-50 employees)</option>
                  <option value="medium-business">Medium Business (51-200 employees)</option>
                  <option value="large-business">Large Business (201+ employees)</option>
                </select> 
                
              </div>
              <div class="flex flex-col">
                <label for="company" class="mb-2 font-medium text-sm">How did you hear about us?</label>
                <select id="company" name="company" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500">
                  <option value="" disabled selected>Select an option</option>
                  <option value="social-media">Social Media</option>
                  <option value="referral">Referral</option>
                  <option value="search-engine">Search Engine</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>
            <div class="flex flex-col">
              <label for="message" class="mb-2 font-medium text-sm">Message</label>
              <textarea id="message" name="message" rows="4" placeholder="How can we help?" required class="border border-gray-300 rounded-lg px-4 py-2 focus:outline-none focus:ring-2 focus:ring-teal-500"></textarea>
            </div>
            <button type="submit" class="h-12 bg-teal-700 text-white font-semibold px-4 py-2 rounded-lg hover:bg-teal-800 transition">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-layout>