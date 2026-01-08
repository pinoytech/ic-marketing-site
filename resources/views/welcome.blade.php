<x-layout title='Mental Healthcare for your Workforce'>
  <!-- SVG sprite: consolidated icons for reuse -->
  <svg aria-hidden="true" style="display:none;position:absolute;" xmlns="http://www.w3.org/2000/svg">
    <symbol id="icon-check-circle" viewBox="0 0 24 24">
      <rect width="24" height="24" rx="12" fill="currentColor" />
      <path d="M10.3664 15.9999L6.56641 12.1999L7.51641 11.2499L10.3664 14.0999L16.4831 7.98328L17.4331 8.93328L10.3664 15.9999Z" fill="#FFFFFF" />
    </symbol>

    <symbol id="icon-circle-bg-40" viewBox="0 0 40 40">
      <rect width="40" height="40" rx="20" fill="#E2E8F0" />
    </symbol>
    <symbol id="icon-circle-bg-40-dark" viewBox="0 0 40 40">
      <rect width="40" height="40" rx="20" fill="#0F766E" />
    </symbol>
  </svg>
  <div class="flex flex-col gap-12 justify-between items-center w-full">
    <!-- Hero Section  -->
    <!-- Hero Section: full-viewport and vertically centered -->
    <div class="w-full bg-teal-700 flex items-center overflow-hidden md:px-96" style="min-height: calc(100vh - var(--site-header-height, 64px));">
      <div class="flex space-x-4 max-w-screen-xl mx-auto py-0 w-full xl:px-0 lg:px-8 px-8 md:px-0 items-center">
        <div class="w-full md:w-1/2 p-8 flex flex-col space-y-6 justify-center text-center md:text-left">
          <h3 class="text-4xl text-white">Build a thriving workforce with holistic employee well-being programs beyond HMO</h3>
          <div class="flex flex-col items-center w-64 relative text-center mx-auto md:mx-0">
            <a href="{{ route('booking') }}">
              <button class="cursor-pointer h-12 font-semibold text-sm w-64 bg-white border-transparent rounded-lg px-4 py-2 text-teal-500">Book a Discovery Call</button>
            </a>
            <div class="md:flex md:items-center md:justify-center z-10 h-50 md:h-auto md:w-1/2 pt-8 md:hidden">
              <img src="/images/hero-header-for-workforce-culture.png" alt="hero header image" class="w-auto object-contain"/>
            </div>
            <img src="/images/pixels.png" alt="pixels" class="absolute top-full z-10"/>
          </div>
        </div>

        <div class="hidden md:flex md:items-center md:justify-center md:w-1/2 py-12">
          <img src="/images/hero-header-for-workforce-culture.png"
               alt="hero header image"
               class="w-auto max-h-[70vh] object-contain"/>
        </div>
      </div>
    </div>
    <div class="flex flex-col gap-12 md:gap-48 justify-between items-center w-full">
      <!-- Features Section 1 -->
      <div class="w-full bg-white h-auto">
        <div class="flex mx-auto md:flex-row flex-col-reverse flex-col px-8 md:px-0 lg:px-8 gap-4 my-auto max-w-screen-xl">
          <div class="w-full md:flex items-center justify-center">
            <img src="/images/wellness-psychological-safety.png" alt="Wellness and Psychological Safety"/>
          </div>
          <div class="w-full flex flex-col gap-8">
            <h3 class="font-semibold text-xl md:text-3xl text-gray-800">Get all-in-one platform for physical wellness, psychological safety, and more</h3>
            <div>
              <div class="flex md:flex-row md:gap-4 flex-col justify-between">
                <div class="bg-gray-50 w-full rounded-lg border border-gray-200 p-6 my-2 flex flex-col gap-4 overflow-visible">
                  <h3 class="text-lg">Mental health</h3>

                  <ul class="flex flex-col space-y-3">
                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Counseling</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Coaching</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>24/7 chat helpline</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Self-help tools and resources</span>
                    </li>
                  </ul>

                  <p class="mt-2">And more&mldr;</p>
                </div>

                <div class="bg-gray-50 w-full rounded-lg border border-gray-200 p-6 my-2 flex flex-col space-y-4 overflow-visible">
                  <h3 class="text-lg">Physical health</h3>

                  <ul class="flex flex-col space-y-3">
                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Primary care</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Preventive health</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Women's health focus activities</span>
                    </li>

                    <li class="flex items-center gap-4 text-sm min-h-[32px]">
                      <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                        <use href="#icon-check-circle"></use>
                      </svg>
                      <span>Nutritional consultations</span>
                    </li>
                  </ul>

                  <p class="mt-2">And more&mldr;</p>
                </div>
              </div>
              <div class="bg-gray-50 rounded-lg border-1 border-gray-200 p-4 my-2">
                <p><span class="font-semibold text-sm">And other well-being aspects</span> such as financial wellness, legal support, and more!</p> 
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Features Section 2 -->
      <div class="w-full bg-white h-auto">
        <div class="flex mx-auto md:flex-row flex-col gap-4 my-auto max-w-screen-xl xl:px-0 px-8 md:px-0 lg:px-8">
          <div class="w-full md:w-2/5 flex flex-col gap-8">
            <h3 class="font-semibold text-xl md:text-3xl text-gray-800">Design workplace well-being initiatives based on real-time company data</h3>
            <div class="bg-gray-50 w-full rounded-lg border border-gray-200 p-6 my-2 flex flex-col space-y-4 overflow-visible">
              <ul class="flex flex-col space-y-3">
                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Platform utilization</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Insights on employee stressors</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Tailored recommendations to sustain employee engagement</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>HR strategies to solve burnout and quiet quitting</span>
                </li>
              </ul>

              <p class="mt-2">And more &hellip;</p>
            </div>
          </div>
          <div class="w-full md:w-3/5 md:flex items-center justify-center">
            <img src="/images/workplace-well-being-company-data.png" alt="Workplace well-being company data"/>
          </div>
        </div>
      </div>
      <!-- Features Section 3 -->
      <div class="w-full bg-white h-auto">
        <div class="flex mx-auto md:flex-row flex-col-reverse flex-col gap-4 my-auto max-w-screen-xl xl:px-0 px-8 md:px-0 lg:px-8">
          <div class="w-full md:w-3/5 md:flex items-center justify-center">
            <img src="/images/access.png" alt="Access expert-led programs and workshops"/>
          </div>
          <div class="w-full md:w-2/5 flex flex-col gap-8">
            <h3 class="font-semibold text-xl md:text-3xl text-gray-800">Access expert-led programs and workshops &mdash; both for employees and leaders</h3>
            <div class="bg-gray-50 w-full rounded-lg border border-gray-200 p-6 my-2 flex flex-col space-y-4 overflow-visible">
              <ul class="flex flex-col space-y-3">
                <li class="flex items-center space-x-3 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Education &amp; Training Sessions</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>&quot;Full Employee Assistance Program (EAP)&quot; Service</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Critical Case Management</span>
                </li>

                <li class="flex items-center gap-4 text-sm min-h-[32px]">
                  <svg class="w-6 h-6 flex-shrink-0 text-teal-500" width="24" height="24" viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                    <use href="#icon-check-circle"></use>
                  </svg>
                  <span>Capability Building Program</span>
                </li>
              </ul>

              <p class="mt-2">And more&mldr;</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Be guided at every step -->
      <div class="w-full bg-white h-auto mb-8">
        <div class="relative flex flex-col mx-auto gap-8 my-auto max-w-screen-xl xl:px-0 px-8 pb-10 md:px-0 lg:px-8">
          <img src="/images/bg-pixels.png" alt="pixels" class="hidden md:block z-10 absolute mx-auto mt-8 repeat-none bottom-0 right-[-9px]"/>
          <h3 class="text-xl md:text-3xl font-semibold w-1/2">Be guided at every step in building your employee well-being program:</h3>
          <ul class="z-10 flex flex-wrap flex-col md:flex-row items-stretch mx-auto gap-4 my-auto max-w-screen-xl px-0">
            <li class="flex flex-row md:flex-col flex-row-reverse items-start justify-between flex-1 min-w-[160px] md:min-h-[244px] h-full bg-white rounded-lg border border-gray-200 p-4 gap-2 text-left hover:shadow-sm transition">
              <div class="flex md:flex-col flex-row-reverse gap-4 w-full">
                <svg class="w-12 h-12" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path opacity="0.4" d="M10.5 12C10.5 11.175 11.175 10.5 12 10.5H48C48.825 10.5 49.5 11.175 49.5 12V25.6031C44.4094 26.3344 40.5 30.7125 40.5 36C40.5 30.1969 35.8031 25.5 30 25.5C24.1969 25.5 19.5 30.1969 19.5 36C19.5 30.7125 15.5906 26.3344 10.5 25.6031V12Z" fill="#0F766E"/>
                  <path d="M12 45C15.3094 45 18 47.6906 18 51C18 52.6594 16.6594 54 15 54H3C1.34062 54 0 52.6594 0 51C0 47.6906 2.69063 45 6 45H12ZM33 45C36.3094 45 39 47.6906 39 51C39 52.6594 37.6594 54 36 54H24C22.3406 54 21 52.6594 21 51C21 47.6906 23.6906 45 27 45H33ZM54 45C57.3094 45 60 47.6906 60 51C60 52.6594 58.6594 54 57 54H45C43.3406 54 42 52.6594 42 51C42 47.6906 44.6906 45 48 45H54ZM9 42C5.69063 42 3 39.3094 3 36C3 32.6906 5.69063 30 9 30C12.3094 30 15 32.6906 15 36C15 39.3094 12.3094 42 9 42ZM30 42C26.6906 42 24 39.3094 24 36C24 32.6906 26.6906 30 30 30C33.3094 30 36 32.6906 36 36C36 39.3094 33.3094 42 30 42ZM51 42C47.6906 42 45 39.3094 45 36C45 32.6906 47.6906 30 51 30C54.3094 30 57 32.6906 57 36C57 39.3094 54.3094 42 51 42ZM48 6C51.3094 6 54 8.69063 54 12V25.9406C53.0531 25.6594 52.0406 25.5 51 25.5C50.4938 25.5 49.9875 25.5375 49.5 25.6031V12C49.5 11.175 48.825 10.5 48 10.5H12C11.175 10.5 10.5 11.175 10.5 12V25.6031C10.0125 25.5375 9.50625 25.5 9 25.5C7.95937 25.5 6.94688 25.65 6 25.9406V12C6 8.69063 8.69063 6 12 6H48Z" fill="#0F766E"/>
                </svg>
                <div class="text-teal-800 text-sm md:text-md font-bold md:mt-2 w-full self-center">Onboarding &amp; Employee Orientation</div>
              </div>
              <svg class="self-center md:self-start" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon-circle-bg-40"></use>
                <path d="M18.499 25V13.678H16.408V10.975H21.253V25H18.499Z" fill="#0F766E"/>
              </svg>
            </li>

            <li class="flex flex-row md:flex-col flex-row-reverse items-start justify-between flex-1 min-w-[160px] md:min-h-[244px] h-full bg-white rounded-lg border border-gray-200 p-4 gap-2 text-left hover:shadow-sm transition">
              <div class="flex md:flex-col flex-row-reverse gap-4 w-full">
                <svg class="w-12 h-12" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path opacity="0.4" d="M11.8867 23.1749L47.9992 12.853V47.1374L35.8398 43.6687C35.0617 47.8405 31.3961 50.9999 26.9992 50.9999C22.0305 50.9999 17.9992 46.9687 17.9992 41.9999C17.9992 40.8562 18.2148 39.7499 18.6086 38.7468L11.8867 36.8249C11.9617 36.5624 11.9992 36.2812 11.9992 35.9999V23.9999C11.9992 23.7187 11.9617 23.4374 11.8867 23.1749ZM22.4992 41.9999C22.4992 44.4843 24.5148 46.4999 26.9992 46.4999C29.343 46.4999 31.2648 44.7093 31.4805 42.4218L22.968 39.9937C22.668 40.5937 22.4992 41.278 22.4992 41.9999Z" fill="#0F766E"/>
                <path d="M51 9C49.3406 9 48 10.3406 48 12V48C48 49.6594 49.3406 51 51 51C52.6594 51 54 49.6594 54 48V12C54 10.3406 52.6594 9 51 9ZM12 24C12 22.3406 10.6594 21 9 21C7.34062 21 6 22.3406 6 24V36C6 37.6594 7.34062 39 9 39C10.6594 39 12 37.6594 12 36V24Z" fill="#0F766E"/>
              </svg>
                <div class="text-teal-800 text-sm md:text-md font-bold md:mt-2 w-full self-center">Marketing &amp; Promotions</div>
              </div>
              <svg class="self-center md:self-start" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon-circle-bg-40"></use>
                <path d="M14.061 25V23.589C15.166 22.7447 16.1322 21.9797 16.9595 21.294C17.7868 20.6027 18.4923 19.9765 19.076 19.4155C19.6597 18.8545 20.1328 18.3445 20.4955 17.8855C20.8582 17.4208 21.1217 16.9958 21.286 16.6105C21.456 16.2195 21.541 15.8512 21.541 15.5055C21.541 15.0748 21.439 14.6838 21.235 14.3325C21.031 13.9755 20.7533 13.6922 20.402 13.4825C20.0563 13.2728 19.6653 13.168 19.229 13.168C18.8097 13.168 18.4215 13.2757 18.0645 13.491C17.7132 13.7007 17.4043 14.0123 17.138 14.426C16.8717 14.8397 16.6507 15.3468 16.475 15.9475L14.163 14.868C14.333 14.2277 14.5767 13.6525 14.894 13.1425C15.217 12.6268 15.6023 12.1877 16.05 11.825C16.5033 11.4623 17.0105 11.1847 17.5715 10.992C18.1325 10.7993 18.7388 10.703 19.3905 10.703C20.3822 10.703 21.2633 10.9098 22.034 11.3235C22.8047 11.7315 23.4082 12.2897 23.8445 12.998C24.2865 13.7063 24.5075 14.5138 24.5075 15.4205C24.5075 15.8738 24.4452 16.3187 24.3205 16.755C24.1958 17.1913 24.0003 17.6333 23.734 18.081C23.4677 18.523 23.122 18.9792 22.697 19.4495C22.272 19.9142 21.7592 20.4043 21.1585 20.92C20.5635 21.43 19.8693 21.974 19.076 22.552H24.7625V25H14.061Z" fill="#0F766E"/>
              </svg>
            </li>

            <li class="flex flex-row md:flex-col flex-row-reverse items-start justify-between flex-1 min-w-[160px] md:min-h-[244px] h-full bg-white rounded-lg border border-gray-200 p-4 gap-2 text-left hover:shadow-sm transition">
              <div class="flex md:flex-col flex-row-reverse gap-4 w-full">
                <svg class="w-12 h-12" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path opacity="0.4" d="M3 24C3 28.8 4.875 33.1594 7.94062 36.3844C9.4875 38.0156 10.8656 39.9094 11.5406 42H25.5V37.5C25.5 32.5312 29.5312 28.5 34.5 28.5H38.4375C38.8031 27.0656 39 25.5562 39 24C39 14.0625 30.9375 6 21 6C11.0625 6 3 14.0625 3 24ZM9 23.25C9 17.0344 14.0344 12 20.25 12C21.4969 12 22.5 13.0031 22.5 14.25C22.5 15.4969 21.4969 16.5 20.25 16.5C16.5188 16.5 13.5 19.5188 13.5 23.25C13.5 24.4969 12.4969 25.5 11.25 25.5C10.0031 25.5 9 24.4969 9 23.25ZM12 46.5V48C12 52.1437 15.3562 55.5 19.5 55.5H22.5C24.0938 55.5 25.575 55.0031 26.7937 54.15C25.9687 52.7906 25.5 51.1969 25.5 49.5V46.5H12Z" fill="#0F766E"/>
                  <path d="M57 37.5C57 35.0156 54.9844 33 52.5 33H34.5C32.0156 33 30 35.0156 30 37.5V49.5C30 51.9844 32.0156 54 34.5 54H38.25L42.3 59.4C42.5813 59.775 43.0312 60 43.5 60C43.9688 60 44.4187 59.775 44.7 59.4L48.75 54H52.5C54.9844 54 57 51.9844 57 49.5V37.5Z" fill="#0F766E"/>
                </svg>
                <div class="text-teal-800 text-sm md:text-md font-bold md:mt-2 w-full self-center">HR Consultations</div>
              </div>
              <svg class="self-center md:self-start" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon-circle-bg-40"></use>
                <path d="M19.44 25.272C18.6013 25.272 17.8335 25.1275 17.1365 24.8385C16.4395 24.5495 15.8502 24.1443 15.3685 23.623C14.8868 23.1017 14.5497 22.4868 14.357 21.7785L16.907 20.5715C16.9467 21.0248 17.0713 21.4272 17.281 21.7785C17.4963 22.1242 17.7882 22.3962 18.1565 22.5945C18.5305 22.7872 18.9612 22.8835 19.4485 22.8835C20.1285 22.8835 20.6697 22.6965 21.072 22.3225C21.48 21.9485 21.684 21.4527 21.684 20.835C21.684 20.393 21.5848 19.9992 21.3865 19.6535C21.1882 19.3022 20.919 19.0273 20.579 18.829C20.2447 18.625 19.8707 18.523 19.457 18.523C19.219 18.523 19.015 18.557 18.845 18.625V16.789H19.4825C19.8508 16.789 20.1823 16.6983 20.477 16.517C20.7773 16.33 21.0153 16.0835 21.191 15.7775C21.3723 15.4715 21.463 15.1428 21.463 14.7915C21.463 14.4458 21.3723 14.1342 21.191 13.8565C21.0153 13.5788 20.7773 13.3578 20.477 13.1935C20.1767 13.0292 19.8395 12.947 19.4655 12.947C19.0915 12.947 18.743 13.032 18.42 13.202C18.1027 13.372 17.8392 13.6043 17.6295 13.899C17.4198 14.1937 17.2867 14.5337 17.23 14.919L15.0455 13.899C15.2042 13.2643 15.496 12.709 15.921 12.233C16.346 11.7513 16.8673 11.3802 17.485 11.1195C18.1083 10.8532 18.7855 10.72 19.5165 10.72C20.3722 10.72 21.1343 10.8957 21.803 11.247C22.4773 11.5983 23.0072 12.0772 23.3925 12.6835C23.7778 13.2842 23.9705 13.9698 23.9705 14.7405C23.9705 15.1372 23.911 15.5083 23.792 15.854C23.6787 16.1997 23.5143 16.5142 23.299 16.7975C23.0837 17.0808 22.823 17.3245 22.517 17.5285C22.9137 17.7382 23.2565 18.0045 23.5455 18.3275C23.8345 18.6505 24.0555 19.0217 24.2085 19.441C24.3615 19.8547 24.438 20.3165 24.438 20.8265C24.438 21.6765 24.2283 22.4387 23.809 23.113C23.3897 23.7817 22.8032 24.3087 22.0495 24.694C21.3015 25.0793 20.4317 25.272 19.44 25.272Z" fill="#0F766E"/>
              </svg>
            </li>

            <li class="flex flex-row md:flex-col flex-row-reverse items-start justify-between flex-1 min-w-[160px] md:min-h-[244px] h-full bg-white rounded-lg border border-gray-200 p-4 gap-2 text-left hover:shadow-sm transition">
              <div class="flex md:flex-col flex-row-reverse gap-4 w-full">
                <svg class="w-12 h-12" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <path opacity="0.4" d="M12 18V48C12 51.3094 14.6906 54 18 54H42C45.3094 54 48 51.3094 48 48V18H12ZM19.5 26.25C19.5 25.0031 20.5031 24 21.75 24H38.25C39.4969 24 40.5 25.0031 40.5 26.25C40.5 27.4969 39.4969 28.5 38.25 28.5H21.75C20.5031 28.5 19.5 27.4969 19.5 26.25ZM19.5 35.25C19.5 34.0031 20.5031 33 21.75 33H38.25C39.4969 33 40.5 34.0031 40.5 35.25C40.5 36.4969 39.4969 37.5 38.25 37.5H21.75C20.5031 37.5 19.5 36.4969 19.5 35.25ZM19.5 44.25C19.5 43.0031 20.5031 42 21.75 42H30.75C31.9969 42 33 43.0031 33 44.25C33 45.4969 31.9969 46.5 30.75 46.5H21.75C20.5031 46.5 19.5 45.4969 19.5 44.25Z" fill="#0F766E"/>
                <path d="M18 6C14.6906 6 12 8.69063 12 12V18H48V12C48 8.69063 45.3094 6 42 6H18ZM21.75 24C20.5031 24 19.5 25.0031 19.5 26.25C19.5 27.4969 20.5031 28.5 21.75 28.5H38.25C39.4969 28.5 40.5 27.4969 40.5 26.25C40.5 25.0031 39.4969 24 38.25 24H21.75ZM21.75 33C20.5031 33 19.5 34.0031 19.5 35.25C19.5 36.4969 20.5031 37.5 21.75 37.5H38.25C39.4969 37.5 40.5 36.4969 40.5 35.25C40.5 34.0031 39.4969 33 38.25 33H21.75ZM21.75 42C20.5031 42 19.5 43.0031 19.5 44.25C19.5 45.4969 20.5031 46.5 21.75 46.5H30.75C31.9969 46.5 33 45.4969 33 44.25C33 43.0031 31.9969 42 30.75 42H21.75Z" fill="#0F766E"/>
              </svg>
                <div class="text-teal-800 text-sm md:text-md font-bold md:mt-2 w-full self-center">Policy Development &amp; Review</div>
              </div>
              <svg class="self-center md:self-start" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon-circle-bg-40"></use>
                <path d="M20.5805 25V22.433H13.585V21.566L20.4445 10.975H23.1645V20.0105H24.7965V22.433H23.1645V25H20.5805ZM17.325 20.0105H20.5805V14.6725L17.325 20.0105Z" fill="#0F766E"/>
              </svg>
            </li>

            <li class="flex flex-row md:flex-col flex-row-reverse items-start justify-between flex-1 min-w-[160px] md:min-h-[244px] h-full bg-white rounded-lg border border-gray-200 p-4 gap-2 text-left hover:shadow-sm transition">
              <div class="flex md:flex-col flex-row-reverse gap-4 w-full">
                <svg class="w-12 h-12" width="60" height="60" viewBox="0 0 60 60" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                  <path opacity="0.4" d="M24 13.5C24 11.0156 26.0156 9 28.5 9H31.5C33.9844 9 36 11.0156 36 13.5V46.5C36 48.9844 33.9844 51 31.5 51H28.5C26.0156 51 24 48.9844 24 46.5V13.5Z" fill="#0F766E"/>
                  <path d="M46.5 15C44.0156 15 42 17.0156 42 19.5V46.5C42 48.9844 44.0156 51 46.5 51H49.5C51.9844 51 54 48.9844 54 46.5V19.5C54 17.0156 51.9844 15 49.5 15H46.5ZM10.5 27C8.01562 27 6 29.0156 6 31.5V46.5C6 48.9844 8.01562 51 10.5 51H13.5C15.9844 51 18 48.9844 18 46.5V31.5C18 29.0156 15.9844 27 13.5 27H10.5Z" fill="#0F766E"/>
                </svg>
                <div class="text-teal-800 text-sm md:text-md font-bold md:mt-2 w-full self-center">Monitoring &amp; Evaluation</div>
              </div>
              <svg class="self-center md:self-start" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                <use href="#icon-circle-bg-40"></use>
                <path d="M19.508 25.255C18.76 25.255 18.0545 25.1388 17.3915 24.9065C16.7285 24.6742 16.1505 24.3313 15.6575 23.878C15.1645 23.4247 14.7962 22.8693 14.5525 22.212L16.737 21.158C16.9013 21.702 17.2272 22.1383 17.7145 22.467C18.2075 22.7957 18.7855 22.96 19.4485 22.96C19.9642 22.96 20.4062 22.8608 20.7745 22.6625C21.1485 22.4585 21.4347 22.1752 21.633 21.8125C21.837 21.4498 21.939 21.0333 21.939 20.563C21.939 19.9793 21.786 19.4807 21.48 19.067C21.1797 18.6477 20.7518 18.3275 20.1965 18.1065C19.6468 17.8798 18.9952 17.7665 18.2415 17.7665C17.7202 17.7665 17.2243 17.8373 16.754 17.979C16.2837 18.1207 15.8445 18.3275 15.4365 18.5995L16.635 10.975H23.792V13.389H18.981L18.5645 16.1345C19.8565 15.8568 21.0182 15.9475 22.0495 16.4065C22.5878 16.5878 23.0525 16.8683 23.4435 17.248C23.8402 17.622 24.1462 18.0753 24.3615 18.608C24.5825 19.1407 24.693 19.7357 24.693 20.393C24.693 21.4017 24.4635 22.2715 24.0045 23.0025C23.5455 23.7278 22.925 24.286 22.143 24.677C21.361 25.0623 20.4827 25.255 19.508 25.255Z" fill="#0F766E"/>
              </svg>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="w-full bg-white h-72 md:h-auto">
      <div class="flex items-center mx-auto flex-col gap-4 my-auto max-w-screen-xl xl:px-0 px-8 md:px-0 lg:px-8 h-full">
        <div style="background-image: url('/images/custom-background.png');" class="flex gap-8 md:gap-12 items-center justify-center bg-gray-50 bg-[url('/images/custom-background.png')] bg-center rounded-lg overflow-clip flex-col my-auto relative md:w-[800px]:h-52 lg:w-full h-72 px-8">
          <h3 class="text-3xl font-semibold text-center">Want custom programs &amp; services? No problem!</h3>
          <div>
            <a href="{{ route('booking') }}">
              <button class="h-12 cursor-pointer font-semibold text-sm w-64 bg-teal-700 border-transparent rounded-lg px-4 py-2 text-white">Book a Discovery Call</button>
            </a>
          </div>
        </div>
      </div>
    </div>
    <livewire:feature-companies />
    <x-semi-footer-transform />
  </div>
</x-layout>