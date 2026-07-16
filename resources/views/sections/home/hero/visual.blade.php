<div class="hero-visual relative hidden xl:mt-0 xl:block xl:h-[680px]">

  {{-- ==========================================================
        Ambient Glow
    =========================================================== --}}

  <div
    class="hero-ambient absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full bg-cyan-400/20 blur-[110px] dark:bg-cyan-300/15 sm:h-80 sm:w-80 lg:h-96 lg:w-96 lg:blur-[140px]">
  </div>

  <div
    class="hero-orbit absolute left-1/2 top-1/2 h-56 w-56 -translate-x-1/2 -translate-y-1/2 rounded-full border border-cyan-300/25 sm:h-72 sm:w-72 lg:h-96 lg:w-96">
  </div>

  <div
    class="hero-orbit absolute left-1/2 top-1/2 h-72 w-72 -translate-x-1/2 -translate-y-1/2 rounded-full border border-blue-300/15 sm:h-96 sm:w-96 lg:h-[540px] lg:w-[540px]">
  </div>

  <div
    class="absolute left-1/2 top-1/2 h-40 w-40 -translate-x-1/2 -translate-y-1/2 rounded-full bg-white/60 blur-3xl dark:bg-cyan-300/10">
  </div>

  {{-- ==========================================================
        Connection Network
    =========================================================== --}}

  <svg class="absolute inset-0 h-full w-full" viewBox="0 0 700 680" fill="none" aria-hidden="true">

    <g opacity=".18" stroke="#38bdf8" stroke-width="1.5" fill="none">

      <path class="hero-network-line" d="M350 340 C305 255, 230 185, 150 150" />

      <path class="hero-network-line" d="M350 340 C430 250, 505 185, 560 150" />

      <path class="hero-network-line" d="M350 340 C350 240, 350 135, 350 60" />

      <path class="hero-network-line" d="M350 340 C235 315, 125 318, 42 335" />

      <path class="hero-network-line" d="M350 340 C480 315, 585 325, 658 345" />

      <path class="hero-network-line" d="M350 340 C315 465, 240 535, 140 560" />

      <path class="hero-network-line" d="M350 340 C430 470, 500 545, 560 575" />

    </g>

    <g class="hero-network-nodes" fill="#38bdf8" opacity=".28">

      <circle cx="150" cy="150" r="5" />
      <circle cx="560" cy="150" r="5" />
      <circle cx="350" cy="60" r="5" />
      <circle cx="42" cy="335" r="5" />
      <circle cx="658" cy="345" r="5" />
      <circle cx="140" cy="560" r="5" />
      <circle cx="560" cy="575" r="5" />

    </g>

  </svg>

  {{-- ==========================================================
        Core
    =========================================================== --}}

  <div
    class="hero-core absolute left-1/2 top-1/2 flex h-28 w-28 -translate-x-1/2 -translate-y-1/2 items-center justify-center rounded-full border border-white/70 bg-white/75 shadow-2xl backdrop-blur-xl dark:border-white/10 dark:bg-slate-950/70 sm:h-32 sm:w-32 lg:h-40 lg:w-40">

    <div class="hero-core-ring absolute inset-2 rounded-full border border-cyan-300/40"></div>

    <span
      class="relative bg-gradient-to-r from-blue-600 via-cyan-500 to-sky-500 bg-clip-text text-lg font-bold text-transparent sm:text-xl lg:text-2xl">

      Afitech

    </span>

  </div>

  {{-- ==========================================================
        Technology Cards
    =========================================================== --}}

  @include('sections.home.hero.tech-card', [
  'title' => 'Kecerdasan Buatan',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="5" y="5" width="12" height="12" rx="2" />
    <path d="M9 1v4M15 1v4M9 19v4M15 19v4M1 9h4M1 15h4M19 9h4M19 15h4" />
  </svg>',
  'class' => 'top-[22%] left-[21.5%] -translate-x-1/2 sm:top-[22%] sm:left-[21.5%] lg:top-[22%] lg:left-[21.5%]',
  'href' => route('services.show', ['slug' => 'artificial-intelligence'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Pengembangan Web',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <circle cx="11" cy="11" r="9" />
    <path d="M2 11h18M11 2a15 15 0 010 18M11 2a15 15 0 000 18" />
  </svg>',
  'class' => 'top-[22%] left-[80%] -translate-x-1/2 sm:top-[22%] sm:left-[80%] lg:top-[22%] lg:left-[80%]',
  'href' => route('services.show', ['slug' => 'web-development'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Handphone & Komputer',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="4" y="3" width="16" height="18" rx="2" />
    <path d="M9 17h6" />
    <path d="M10 7h4" />
  </svg>',
  'class' => 'top-[9%] left-1/2 -translate-x-1/2 sm:top-[9%] lg:top-[9%]',
  'href' => route('services.show', ['slug' => 'handphone-computer'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Layanan Cloud',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M18 16a4 4 0 000-8 6 6 0 00-11-2A4 4 0 006 16z" />
  </svg>',
  'class' => 'top-[49%] left-[6%] -translate-x-1/2 sm:top-[49%] sm:left-[6%] lg:top-[49%] lg:left-[6%]',
  'href' => route('services.show', ['slug' => 'cloud-services'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'REST API',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M8 12h8M12 8v8" />
    <circle cx="12" cy="12" r="9" />
  </svg>',
  'class' => 'top-[51%] left-[86%] -translate-x-1/2 sm:top-[51%] sm:left-[86%] lg:top-[51%] lg:left-[86%]',
  'href' => route('services.show', ['slug' => 'rest-api'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Aplikasi Android',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="6" y="3" width="10" height="18" rx="2" />
    <circle cx="11" cy="17" r="1" />
  </svg>',
  'class' => 'top-[82%] left-[20%] -translate-x-1/2 sm:top-[82%] sm:left-[20%] lg:top-[82%] lg:left-[20%]',
  'href' => route('services.show', ['slug' => 'android-apps'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Sistem Backend',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M11 3l8 4v10l-8 4-8-4V7z" />
  </svg>',
  'class' => 'top-[84%] left-[80%] -translate-x-1/2 sm:top-[84%] sm:left-[80%] lg:top-[84%] lg:left-[80%]',
  'href' => route('services.show', ['slug' => 'backend-system'])
  ])

</div>
