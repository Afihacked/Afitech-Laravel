@extends('layouts.app')

@section('title', $service['title'].' | Afitech')

@section('content')

<section class="section-padding relative overflow-hidden py-24">
  <div class="container-afitech">
    <div class="grid gap-14 lg:grid-cols-[.95fr_1.05fr] lg:items-center">
      <div class="max-w-3xl">
        <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-400">
          Layanan
        </span>

        <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">
          {{ $service['title'] }}
        </h1>

        <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
          {{ $service['subtitle'] }}
        </p>

        <div class="mt-10 space-y-6">
          <div class="glass rounded-[2rem] border border-white/10 bg-slate-950/10 p-8 shadow-2xl dark:bg-slate-900/70">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Ringkasan</h2>
            <p class="mt-4 text-slate-600 dark:text-slate-300">{{ $service['overview'] }}</p>
          </div>

          <div class="grid gap-4 sm:grid-cols-2">
            @foreach ($service['features'] as $feature)
            <div class="glass rounded-3xl border border-white/10 p-6 shadow-lg dark:bg-slate-950/80">
              <h3 class="text-lg font-semibold text-slate-950 dark:text-white">{{ $feature }}</h3>
            </div>
            @endforeach
          </div>
        </div>
      </div>

      <div class="glass rounded-[2rem] border border-white/10 bg-white/80 p-10 shadow-2xl dark:bg-slate-950/80">
        <p class="text-sm uppercase tracking-[0.22em] text-cyan-300">Yang Kami Berikan</p>
        <div class="mt-8 space-y-6">
          <div class="rounded-3xl border border-white/10 bg-slate-950/5 p-6 dark:border-white/10 dark:bg-slate-900/50">
            <p class="text-slate-600 dark:text-slate-300">Kami fokus pada solusi yang dapat langsung diterapkan dan bekerja dalam ekosistem bisnis Anda.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-slate-950/5 p-6 dark:border-white/10 dark:bg-slate-900/50">
            <p class="text-slate-600 dark:text-slate-300">Setiap layanan kami dibangun berdasarkan pengalaman praktis dan praktik rekayasa terbaik terkini.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-slate-950/5 p-6 dark:border-white/10 dark:bg-slate-900/50">
            <p class="text-slate-600 dark:text-slate-300">Kami membantu Anda menyusun peta jalan fitur, desain, dan pengiriman agar cepat sampai ke pengguna.</p>
          </div>
        </div>

        <a href="/contact" class="mt-10 inline-flex w-full items-center justify-center gap-3 rounded-3xl bg-gradient-to-r from-blue-600 via-cyan-500 to-sky-500 px-6 py-4 text-sm font-semibold text-white shadow-lg transition-default hover:scale-[1.01]">
          {{ $service['callToAction'] }}
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </div>
    </div>
  </div>
</section>

@endsection
