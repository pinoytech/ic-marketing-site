<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@100..900&display=swap" rel="stylesheet">
  <meta property="og:image" content="/resources/images/meta/infinit-care.png">
  <meta name="twitter:image" content="/resources/images/meta/infinit-care.png">
  <meta name="description" content="Collaborate, Integrate, Evaluate, Employee">
  <meta property="og:title" content="Infinit Care - How It Works">
  <meta property="og:description" content="Collaborate, Integrate, Evaluate, Employee">
  <meta name="twitter:creator" content="developers">
  <meta name="twitter:card" content="summary">
  <meta name="keywords" content="mental health, mental healthcare, mental health care, EAP, employee assistance program, OSH, occupational safety and health, webinar, corporate wellness progam, mental wellness program, wellness program, counseling, counselor, counselor near me, therapy, therapist, therapist near me, psychologist, psychologist near me, mental health hotline, philippines mental health hotline, mental breakdown, mental health awareness, emotional health, mental health act, mental health policy, mental health program">
  <title>{{ $title }}</title>
  @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-dvh bg-black-100 w-full">
  <nav class="bg-white shadow-md sticky top-0 z-50 w-full">
    <div class="max-w-screen-xl mx-auto">
      <div class="flex items-center justify-between h-16">
        <!-- Mobile hamburger (left) -->
        <div class="flex items-center justify-between w-full md:w-auto px-4 md:px-0">
          <!-- Logo -->
          <a href="{{ route('home') }}" class="flex items-center">
            <img src="/images/logo.png" height="39px" width="129px" alt="InfinitCare Logo" class="cursor-pointer w-auto"/>
          </a>

          <button id="mobile-menu-button" aria-controls="mobile-menu" aria-expanded="false" class="md:hidden p-2 mr-3 rounded-md text-teal-500 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-teal-500">
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
          </button>
        </div>

        <!-- Desktop menu (hidden on mobile) -->
        <div class="hidden md:flex items-center space-x-12">
          <div class="hidden md:flex space-x-12">
            <a wire:navigate href="{{ route('home') }}"
              @class([
                'text-gray-600 hover:text-gray-800 text-sm active:text-teal-700 active:font-bold',
                'text-teal-700 font-bold' => request()->is('/'),
              ])
            >Home</a>
            <a wire:navigate href="{{ route('about-us') }}"
              @class([
                'text-gray-600 hover:text-gray-800 text-sm active:text-teal-700 active:font-bold',
                'text-teal-700 font-bold' => request()->is('about-us'),
              ])
            >About us</a>
            <a wire:navigate href="{{ route('resources.index') }}"
              @class([
                'text-gray-600 hover:text-gray-800 text-sm active:text-teal-700 active:font-bold',
                'text-teal-700 font-bold' => request()->is('resources*'),
            ])>Resources</a>
          </div>
          <div class="hidden md:flex space-x-3">
            <a href="https://app.infinitcare.co/" target="_blank">
              <button class="border-2 font-semibold border-teal-700 rounded-lg px-4 py-2 text-teal-600 hover:bg-teal-700 hover:text-white transition cursor-pointer text-sm">
                Member Login
              </button>
            </a>
            <a wire:navigate href="{{ route('booking') }}">
              <button class="cursor-pointer border-2 font-semibold border-teal-700 rounded-lg px-4 py-2 text-teal-600 bg-teal-700 text-white transition cursor-pointer text-sm">
                Book a Discovery Call
              </button>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Mobile menu overlay -->
    <div id="mobile-menu" aria-hidden="true" class="md:hidden bg-icgreen-light fixed inset-0 z-50 transform -translate-x-full transition-transform duration-300 ease-in-out">
      <!-- Backdrop -->
      <div id="mobile-menu-backdrop" class="absolute inset-0 bg-black/40" aria-hidden="true"></div>

      <!-- Sliding panel -->
      <div class="bg-icgreen-light absolute left-0 top-0 bottom-0 w-full max-w-xs overflow-auto">
        <div class="p-6 flex items-center justify-between bg-white">
          <a href="/" class="flex items-center">
            <img src="/images/logo.png" height="32" width="108" alt="InfinitCare Logo" class="w-auto"/>
          </a>
          <button id="mobile-menu-close" class="p-2 rounded-md text-teal-700 hover:bg-gray-100" aria-label="Close menu">
            <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>

        <nav class="p-6 bg-icgreen-light mt-6 flex flex-col space-y-4">
          <a href="/" class="text-gray-600 hover:text-gray-800 text-base" @class(['text-teal-700 font-bold' => request()->is('/')]) >Home</a>
          <a href="/about-us" class="text-gray-600 hover:text-gray-800 text-base" @class(['text-teal-700 font-bold' => request()->is('about-us')])>About us</a>
          <a href="/resources" class="text-gray-600 hover:text-gray-800 text-base" @class(['text-teal-700 font-bold' => request()->is('resources')]) >Resources</a>

          <div class="mt-4 flex flex-col gap-3">
            <a href='/'>
              <button class="w-full border-2 border-teal-700 rounded-lg px-4 py-2 text-teal-700 hover:bg-teal-700 hover:text-white transition">Member Login</button>
            </a>
            <a href="/booking">
              <button class="w-full border-2 border-transparent bg-teal-700 rounded-lg px-4 py-2 text-white">Book a Discovery Call</button>
            </a>
          </div>
        </nav>
      </div>
    </div>
  </nav>
  {{ $slot }}

  @include('partials.footer')
  <livewire:cookie-banner />
  <script data-navigate-once>
    (function () {
      const btn = document.getElementById('mobile-menu-button');
      const menu = document.getElementById('mobile-menu');
      const closeBtn = document.getElementById('mobile-menu-close');
      const backdrop = document.getElementById('mobile-menu-backdrop');

      if (!btn || !menu) return;

      const openMenu = () => {
        menu.classList.remove('-translate-x-full');
        menu.classList.add('translate-x-0');
        btn.setAttribute('aria-expanded', 'true');
        menu.setAttribute('aria-hidden', 'false');
        if (closeBtn) closeBtn.focus();
        document.body.classList.add('overflow-hidden');
      };

      const closeMenu = () => {
        menu.classList.add('-translate-x-full');
        menu.classList.remove('translate-x-0');
        btn.setAttribute('aria-expanded', 'false');
        menu.setAttribute('aria-hidden', 'true');
        document.body.classList.remove('overflow-hidden');
      };

      btn.addEventListener('click', () => {
        const expanded = btn.getAttribute('aria-expanded') === 'true';
        if (expanded) closeMenu(); else openMenu();
      });

      if (closeBtn) closeBtn.addEventListener('click', closeMenu);
      if (backdrop) backdrop.addEventListener('click', closeMenu);

      document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') closeMenu();
      });
      // set current year for copyright
      const yearSpan = document.getElementById('current-year');
      if (yearSpan) yearSpan.textContent = new Date().getFullYear();
    })();
  </script>
</body>
</html>