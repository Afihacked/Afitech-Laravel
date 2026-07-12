@php
  $navigation = [
      ['label' => 'Home', 'href' => '/'],
      ['label' => 'Projects', 'href' => '/projects'],
      ['label' => 'Blog', 'href' => '/blog'],
      ['label' => 'About', 'href' => '/about'],
      ['label' => 'Contact', 'href' => '/contact'],
  ];
@endphp

<header id="navbar" class="fixed inset-x-0 top-0 z-50 py-4">

  <nav
    class="container-afitech glass flex h-18 items-center justify-between rounded-3xl px-6 transition-all duration-300">

    {{-- ==========================================================
            Brand
        =========================================================== --}}

    <a href="/" class="group flex items-center gap-3">

      <div
        class="flex size-10 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 via-cyan-500 to-sky-500 font-bold text-white shadow-lg transition-transform duration-300 group-hover:rotate-6">

        A

      </div>

      <span class="text-xl font-semibold tracking-tight text-slate-900 dark:text-white">

        Afitech

      </span>

    </a>

    {{-- ==========================================================
            Desktop Navigation
        =========================================================== --}}

    <ul class="hidden items-center gap-2 md:flex">

      @foreach ($navigation as $item)

      <li>

        <a href="{{ $item['href'] }}"
          class="transition-default rounded-xl px-4 py-2 text-sm font-medium text-slate-600 hover:bg-white/60 hover:text-slate-950 dark:text-slate-300 dark:hover:bg-white/10 dark:hover:text-white">

          {{ $item['label'] }}

        </a>

      </li>

      @endforeach

    </ul>

    {{-- ==========================================================
            Actions
        =========================================================== --}}

    <div class="flex items-center gap-2">

      <button
        id="theme-toggle"
        type="button"
        data-theme-toggle
        data-cursor-hover
        class="transition-default flex size-10 items-center justify-center rounded-xl border border-slate-200/70 bg-white/70 text-slate-700 shadow-sm hover:bg-white hover:text-slate-950 dark:border-white/10 dark:bg-white/10 dark:text-cyan-100 dark:hover:bg-white/15 dark:hover:text-white"
        aria-label="Aktifkan dark mode"
        title="Toggle theme">

        <svg data-theme-icon="light" xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v2m0 14v2m9-9h-2M5 12H3m15.07-6.07-1.42 1.42M7.35 16.65l-1.42 1.42m12.14 0-1.42-1.42M7.35 7.35 5.93 5.93M12 8a4 4 0 1 1 0 8 4 4 0 0 1 0-8z" />

        </svg>

        <svg data-theme-icon="dark" xmlns="http://www.w3.org/2000/svg" class="hidden h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12.8A8.5 8.5 0 1 1 11.2 3 6.5 6.5 0 0 0 21 12.8z" />

        </svg>

      </button>

      <div class="hidden md:block">

        <a href="https://github.com/Afihacked/Afitech-Laravel"
          target="_blank"
          rel="noreferrer"
          data-cursor-hover
          class="transition-default inline-flex items-center gap-2 rounded-xl bg-gradient-to-r from-slate-900 to-slate-800 px-5 py-3 text-sm font-semibold text-white hover:scale-[1.02] hover:shadow-xl dark:from-cyan-500 dark:to-blue-600">

          GitHub

          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6" />

          </svg>

        </a>

      </div>

      {{-- ==========================================================
              Mobile
          =========================================================== --}}

      <button
        id="mobile-menu-button"
        type="button"
        class="transition-default flex size-10 items-center justify-center rounded-xl hover:bg-white/60 dark:hover:bg-white/10 md:hidden"
        aria-label="Buka menu navigasi"
        aria-controls="mobile-menu"
        aria-expanded="false">

        <span class="relative block h-4 w-4" aria-hidden="true">
          <span class="mobile-menu-line absolute left-0 top-[3px] h-0.5 w-4 rounded-full bg-slate-900 dark:bg-white"></span>
          <span class="mobile-menu-line absolute left-0 top-1/2 h-0.5 w-4 -translate-y-1/2 rounded-full bg-slate-900 dark:bg-white"></span>
          <span class="mobile-menu-line absolute bottom-[3px] left-0 h-0.5 w-4 rounded-full bg-slate-900 dark:bg-white"></span>
        </span>

      </button>

    </div>

  </nav>

  <div
    id="mobile-menu"
    class="container-afitech pointer-events-none mt-3 hidden origin-top scale-95 opacity-0 md:hidden"
    aria-hidden="true">

    <div class="glass overflow-hidden rounded-3xl px-4 py-4 shadow-2xl">

      <div class="grid gap-2">

        @foreach ($navigation as $item)

        <a href="{{ $item['href'] }}"
          class="transition-default rounded-2xl px-4 py-3 text-sm font-semibold text-slate-700 hover:bg-white/70 hover:text-slate-950 dark:text-slate-200 dark:hover:bg-white/10 dark:hover:text-white">

          {{ $item['label'] }}

        </a>

        @endforeach

      </div>

      <div class="mt-4 border-t border-white/60 pt-4 dark:border-white/10">

        <a href="https://github.com/Afihacked/Afitech-Laravel"
          target="_blank"
          rel="noreferrer"
          data-cursor-hover
          class="transition-default flex items-center justify-center gap-2 rounded-2xl bg-slate-950 px-5 py-3 text-sm font-semibold text-white hover:scale-[1.01] dark:bg-gradient-to-r dark:from-cyan-500 dark:to-blue-600">

          GitHub

          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">

            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14m-6-6 6 6-6 6" />

          </svg>

        </a>

      </div>

    </div>

  </div>

</header>
