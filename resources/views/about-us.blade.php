<x-layout title='About us'>
  <div class="flex flex-col gap-6 justify-between items-center w-full">
    <div class="relative flex bg-teal-700 md:h-[400px] h-[500px] flex-col gap-12 my-auto justify-center items-center w-full md:px-96 px-0 overflow-hidden">
      <!-- Desktop background (left, vertical repeat) -->
      <div class="hidden md:block absolute inset-0 z-0 pointer-events-none bg-top md:bg-left bg-auto bg-repeat-y" style="background-image: url('/images/side-pixel-bg.png'); background-position: top left;"></div>

      <!-- Mobile background: single top image -->
      <div class="block md:hidden absolute inset-x-0 top-0 z-0 pointer-events-none bg-top bg-no-repeat h-12" style="background-image: url('/images/top-pixel-bg.png'); background-position: top center; background-size: auto;"></div>
      <div class="relative z-10 w-full max-w-screen-xl mx-auto py-8 flex flex-col">
        <div class="flex flex-col gap-6 w-4/5 mx-auto text-center">
          <h2 class="text-4xl text-white">Workplace well-being is a standard, not a perk</h2>
          <p class="text-white">Infinit Care helps companies improve employee engagement and productivity through holistic interventions. When well-being becomes part of your culture, people and performance thrive together.</p>
        </div>
      </div>
    </div>
    <div class="flex flex-col gap-8 my-auto justify-center items-center w-full md:px-96 px-0">
      <div class="w-full max-w-screen-xl mx-auto flex flex-col">
        <div class="flex gap-6 md:flex-row flex-col w-full mx-auto px-4 md:px-0">
          <div class="md:w-3/10 w-full md:flex justify-center items-center">
            <!-- Mobile: fixed-height background showing center of image -->
            <div class="rounded-lg block md:hidden w-full h-[150px] bg-center bg-cover bg-no-repeat" style="background-image: url('/images/employee-frustrated.png'); background-position: center;"></div>

            <!-- Desktop: show natural image with auto height -->
            <img src="/images/employee-frustrated.png" alt="Employee Frustrated" class="hidden md:block w-auto h-auto max-w-full" />
          </div>
          <div class="flex flex-col gap-6 md:w-7/10 w-full justify-center items-start">
            <h3 class="text-lg md:text-3xl text-black-900 font-semibold">We help carry the unseen weight of organizational health</h3>
            <ul class="flex flex-col gap-4">
              <li class="rounded-md p-4 bg-gray-100 text-xs h-20 md:h-18 flex gap-6 md:gap-4 items-center">
                <img src="/images/target.png" alt="Target Icon"/>
                <p class="flex">How do you make programs that actually solve presenteeism or absenteeism?</p>
              </li>
              <li class="rounded-md p-4 bg-gray-100 text-xs h-20 md:h-18 flex gap-6 md:gap-4 items-center">
                <img src="/images/flying-money.png" alt="Target Icon"/>
                <p class="flex">How do you manage rising HMO &amp; EAP costs when employees are still burned out or quiet cracking?</p>
              </li>
              <li class="rounded-md p-4 bg-gray-100 text-xs h-20 md:h-18 flex gap-6 md:gap-4 items-center">
                <img src="/images/employee-asking.png" alt="Target Icon"/>
                <p class="flex">How do you meet employees&apos; growing expectations for wellbeing support with a stretched HR team?</p>
              </li>
              <li class="rounded-md p-4 bg-gray-100 text-xs h-20 md:h-18 flex gap-6 md:gap-4 items-center">
                <img src="/images/refresh.png" alt="Target Icon"/>
                <p class="flex">How do you reduce costly attrition, even when you&apos;ve already made improvements?</p>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="flex flex-col gap-4 my-auto justify-center items-center w-full">
        <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col gap-8 px-4 md:px-0">
          <h3 class="text-2xl md:text-3xl">HMOs prioritize physical health, EAPs focus on mental heath. True wellness demands both since they are interdependent.</h3>
          <div class="flex flex-col gap-4">
            <h4 class="font-semibold text-md">Our approach: The Mental Health Continuum</h4>
            <p class="text-sm">People constantly move along the continuum and need different solutions to nudge them towards the left side of the scale. Most services only focus on the &quot;red zone.&quot;<br /><span class="text-gray-500 text-xs">(Source: The Mental Health Continuum: From Languishing to Flourishing in Life, Corey, L. M. Keyes)</span></p>
          </div>
        </div>
        <div class="w-full max-w-screen-xl mx-auto py-8 flex flex-col gap-8 px-4 md:px-0">
          <h4 class='text-md font-semibold'>Uniquely, Infinite Care offers support at all points on the continuum:</h4>
          <div class="flex flex-col gap-8 justify-center items-center w-full hidden md:block">
            <img src='/images/meter.png' alt="Mental Health Continuum Graphic"/>
            <img src='/images/interventions.png' alt="Mental Health Continuum Graphic"/>
          </div>
          <div class="flex flex-col gap-8 justify-center items-center w-full md:hidden block">
            <img src='/images/mobile-meter.png' alt="Mental Health Continuum Graphic"/>
          </div>
        </div>
      </div>
    </div>
    <x-team-of-experts />
  </div>
</x-layout>