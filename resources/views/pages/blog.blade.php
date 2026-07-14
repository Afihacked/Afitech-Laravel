@extends('layouts.app')

@section('title', 'Artikel | Afitech')

@section('content')

<section class="section-padding relative overflow-hidden py-24">
  <div class="container-afitech">
    <div class="max-w-3xl">
      <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-400">
        Wawasan
      </span>

      <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">
        Ide dan strategi digital yang membantu tim Anda bergerak lebih cepat.
      </h1>

      <p class="mt-8 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-300">
        Pilihan artikel ini ditujukan untuk pengusaha, tim produk, dan pengembang yang ingin mempercepat transformasi digital dengan teknologi terkini.
      </p>
    </div>

    <div class="mt-14 grid gap-8 lg:grid-cols-3">
      @foreach ([
      ['title' => 'Membangun platform digital yang mudah diskalakan', 'summary' => 'Prinsip arsitektur yang memudahkan evolusi produk tanpa mengorbankan performa.', 'tag' => 'Arsitektur'],
      ['title' => 'AI yang memberi nilai bisnis nyata', 'summary' => 'Bagaimana memilih otomatisasi cerdas untuk meningkatkan efisiensi operasional.', 'tag' => 'AI'],
      ['title' => 'Mengirim produk lebih cepat dengan alur kerja modern', 'summary' => 'Langkah-langkah praktis untuk penerapan proses pengiriman yang lebih ramping.', 'tag' => 'Pengiriman'],
      ] as $post)
      <article class="glass rounded-[2rem] border border-white/10 p-8 shadow-xl dark:bg-slate-950/80">
        <span class="inline-flex rounded-full bg-slate-900/10 px-3 py-1 text-xs font-semibold uppercase tracking-[0.22em] text-slate-900 dark:bg-white/10 dark:text-slate-200">{{ $post['tag'] }}</span>
        <h2 class="mt-6 text-2xl font-semibold text-slate-950 dark:text-white">{{ $post['title'] }}</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-300">{{ $post['summary'] }}</p>
        <a href="#" class="mt-6 inline-flex items-center gap-2 text-sm font-semibold text-cyan-500 hover:text-cyan-400">Baca selengkapnya
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
          </svg>
        </a>
      </article>
      @endforeach
    </div>
  </div>
</section>

@endsection
