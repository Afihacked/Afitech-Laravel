<div class="hero-visual relative mt-10 h-[430px] sm:h-[500px] md:h-[560px] lg:mt-0 lg:h-[680px]">

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

    <g opacity=".18" stroke="#38bdf8" stroke-width="1.5">

      <line class="hero-network-line" x1="350" y1="340" x2="180" y2="80" />

      <line class="hero-network-line" x1="350" y1="340" x2="560" y2="150" />

      <line class="hero-network-line" x1="350" y1="340" x2="120" y2="500" />

      <line class="hero-network-line" x1="350" y1="340" x2="560" y2="560" />

      <line class="hero-network-line" x1="350" y1="340" x2="70" y2="340" />

      <line class="hero-network-line" x1="350" y1="340" x2="640" y2="340" />

    </g>

    <g class="hero-network-nodes" fill="#38bdf8" opacity=".28">

      <circle cx="180" cy="80" r="5" />
      <circle cx="560" cy="150" r="5" />
      <circle cx="120" cy="500" r="5" />
      <circle cx="560" cy="560" r="5" />
      <circle cx="70" cy="340" r="5" />
      <circle cx="640" cy="340" r="5" />

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
  'title' => 'Artificial Intelligence',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="5" y="5" width="12" height="12" rx="2" />
    <path d="M9 1v4M15 1v4M9 19v4M15 19v4M1 9h4M1 15h4M19 9h4M19 15h4" />
  </svg>',
  'class' => 'top-0 left-2 sm:left-16 lg:left-24',
  'href' => route('services.show', ['slug' => 'artificial-intelligence'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Web Development',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <circle cx="11" cy="11" r="9" />
    <path d="M2 11h18M11 2a15 15 0 010 18M11 2a15 15 0 000 18" />
  </svg>',
  'class' => 'top-16 right-2 sm:right-8 lg:top-24 lg:right-0',
  'href' => route('services.show', ['slug' => 'web-development'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Android Apps',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="6" y="3" width="10" height="18" rx="2" />
    <circle cx="11" cy="17" r="1" />
  </svg>',
  'class' => 'bottom-24 left-0 sm:left-8 lg:left-4',
  'href' => route('services.show', ['slug' => 'android-apps'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Handphone & Computer',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <rect x="4" y="3" width="16" height="18" rx="2" />
    <path d="M9 17h6" />
    <path d="M10 7h4" />
  </svg>',
  'class' => 'bottom-16 left-1/2 -translate-x-1/2 sm:bottom-20 lg:bottom-24',
  'href' => route('services.show', ['slug' => 'handphone-computer'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Backend System',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M11 3l8 4v10l-8 4-8-4V7z" />
  </svg>',
  'class' => 'bottom-0 right-2 sm:right-12 lg:bottom-4',
  'href' => route('services.show', ['slug' => 'backend-system'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'Cloud Services',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M18 16a4 4 0 000-8 6 6 0 00-11-2A4 4 0 006 16z" />
  </svg>',
  'class' => 'hidden top-1/2 left-0 sm:block lg:-left-8',
  'href' => route('services.show', ['slug' => 'cloud-services'])
  ])

  @include('sections.home.hero.tech-card', [
  'title' => 'REST API',
  'icon' => '
  <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M8 12h8M12 8v8" />
    <circle cx="12" cy="12" r="9" />
  </svg>',
  'class' => 'hidden top-1/2 right-0 sm:block lg:-right-8',
  'href' => route('services.show', ['slug' => 'rest-api'])
  ])

</div>
