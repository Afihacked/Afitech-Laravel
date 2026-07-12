@php
$footerLinks = [
['label' => 'Home', 'href' => '/'],
['label' => 'Projects', 'href' => '/projects'],
['label' => 'Blog', 'href' => '/blog'],
['label' => 'About', 'href' => '/about'],
['label' => 'Contact', 'href' => '/contact'],
];

$services = [
['label' => 'Artificial Intelligence', 'href' => '/services/artificial-intelligence'],
['label' => 'Web Development', 'href' => '/services/web-development'],
['label' => 'Android Apps', 'href' => '/services/android-apps'],
['label' => 'Backend System', 'href' => '/services/backend-system'],
['label' => 'Cloud Services', 'href' => '/services/cloud-services'],
['label' => 'REST API', 'href' => '/services/rest-api'],
];
@endphp

<footer id="contact" class="relative overflow-hidden bg-slate-950 text-white">

  <div
    class="absolute inset-0 bg-[linear-gradient(to_right,rgba(255,255,255,.08)_1px,transparent_1px),linear-gradient(to_bottom,rgba(255,255,255,.08)_1px,transparent_1px)] bg-[size:72px_72px] opacity-20">
  </div>

  <div class="absolute inset-x-0 top-0 h-px bg-gradient-to-r from-transparent via-cyan-300/60 to-transparent"></div>

  <div class="container-afitech relative py-16 sm:py-20">

    <div class="grid gap-12 lg:grid-cols-[1fr_.9fr] lg:gap-16">

      <div id="about" class="scroll-mt-28">

        <div class="flex items-center gap-3">

          <div
            class="flex size-11 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 via-cyan-500 to-sky-500 font-bold text-white shadow-lg">

            A

          </div>

          <span class="text-2xl font-semibold tracking-tight">

            Afitech

          </span>

        </div>

        <p class="mt-6 max-w-xl text-base leading-8 text-slate-300 sm:text-lg">

          Partner digital untuk website, aplikasi, backend, dan solusi AI yang dibangun cepat, rapi, aman, serta siap
          berkembang bersama kebutuhan bisnis.

        </p>

        <div class="mt-8 flex flex-wrap gap-3">

          <a href="mailto:afitech.services@gmail.com"
            class="transition-default inline-flex items-center justify-center rounded-2xl bg-white px-6 py-3 text-sm font-semibold text-slate-950 hover:scale-[1.02]">

            Start a Project

          </a>

          <a href="/"
            class="transition-default inline-flex items-center justify-center rounded-2xl border border-white/15 px-6 py-3 text-sm font-semibold text-white hover:border-cyan-300/60 hover:bg-white/10">

            Back to Top

          </a>

        </div>

      </div>

      <div class="grid gap-8 sm:grid-cols-2">

        <div id="projects" class="scroll-mt-28">

          <h2 class="text-sm font-semibold uppercase text-cyan-200">

            Capabilities

          </h2>

          <div class="mt-5 flex flex-wrap gap-2">

            @foreach ($services as $service)

            <a href="{{ $service['href'] }}" class="rounded-full border border-white/10 bg-white/5 px-4 py-2 text-sm text-slate-200 transition-default hover:border-cyan-300/60 hover:bg-white/10 hover:text-white">

              {{ $service['label'] }}

            </a>

            @endforeach

          </div>

        </div>

        <div id="insights" class="scroll-mt-28">

          <h2 class="text-sm font-semibold uppercase text-cyan-200">

            Navigation

          </h2>

          <div class="mt-5 grid gap-3">

            @foreach ($footerLinks as $link)

            <a href="{{ $link['href'] }}" class="transition-default text-sm text-slate-300 hover:text-white">

              {{ $link['label'] }}

            </a>

            @endforeach

          </div>

        </div>

      </div>

    </div>

    <div
      class="mt-14 flex flex-col gap-4 border-t border-white/10 pt-6 text-sm text-slate-400 sm:flex-row sm:items-center sm:justify-between">

      <p>

        &copy; {{ date('Y') }} Afitech. Crafted for future-ready digital products.

      </p>

      <div class="flex flex-wrap items-center gap-4">

        <a href="https://github.com/Afihacked" target="_blank" rel="noreferrer" data-cursor-hover
          class="transition-default text-slate-300 hover:text-white">

          GitHub

        </a>

        <a href="mailto:afitech.services@gmail.com" data-cursor-hover class="transition-default text-slate-300 hover:text-white">

          afitech.services@gmail.com

        </a>

      </div>

    </div>

  </div>

</footer>