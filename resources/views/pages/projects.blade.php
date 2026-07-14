@extends('layouts.app')

@section('title', 'Proyek | Afitech')

@section('content')

<section class="section-padding relative overflow-hidden py-24">
  <div class="container-afitech">
    <div class="grid gap-12 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
      <div class="max-w-2xl">
        <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-400">
          Karya Kami
        </span>

        <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">
          Produk digital yang dibangun untuk skala,
          <span class="bg-gradient-to-r from-blue-600 via-cyan-500 to-sky-500 bg-clip-text text-transparent">
            keandalan, dan kecepatan.
          </span>
        </h1>

        <p class="mt-8 max-w-xl text-lg leading-8 text-slate-600 dark:text-slate-300">
          Setiap proyek Afitech dirancang untuk membantu bisnis bergerak lebih cepat dengan website modern, aplikasi mobile, backend yang kuat, dan solusi AI yang siap berevolusi.
        </p>

        <div class="mt-10 grid gap-4 sm:grid-cols-2">
          <div class="glass rounded-3xl border border-white/10 p-7">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Platform Bisnis</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">Solusi digital untuk operasional, penjualan, dan pengalaman pelanggan yang mulus.</p>
          </div>
          <div class="glass rounded-3xl border border-white/10 p-7">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">AI / Otomasi</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">Integrasi kecerdasan buatan dan otomasi agar produktivitas tim dan pelanggan meningkat.</p>
          </div>
        </div>
      </div>

      <div class="glass rounded-[2rem] border border-white/10 bg-slate-950/10 p-10 shadow-2xl dark:bg-slate-900/70">
        <p class="text-sm uppercase tracking-[0.22em] text-cyan-300">Layanan Unggulan</p>
        <div class="mt-8 space-y-5">
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Pengembangan Web</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Antarmuka dan backend berperforma tinggi, ramah SEO, dan UI yang mudah dikembangkan.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Aplikasi Mobile</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Aplikasi Android yang stabil, cepat, dan mudah diadaptasi sesuai kebutuhan pengguna.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Layanan Cloud</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Arsitektur siap cloud untuk keamanan, ketersediaan, dan skalabilitas berkelanjutan.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-16 grid gap-6 sm:grid-cols-2 lg:grid-cols-3">
      @foreach ([
      ['title' => 'Kecerdasan Buatan', 'description' => 'Solusi AI untuk otomatisasi, wawasan prediktif, dan personalisasi digital.', 'icon' => '💡'],
      ['title' => 'Pengembangan Web', 'description' => 'Website responsif dengan desain modern yang memperkuat merek digital Anda.', 'icon' => '🌐'],
      ['title' => 'Aplikasi Android', 'description' => 'Aplikasi mobile yang fokus pada pengalaman pengguna dan performa stabil.', 'icon' => '📱'],
      ['title' => 'Handphone & Komputer', 'description' => 'Layanan perbaikan, instalasi, dan dukungan teknis untuk perangkat Anda.', 'icon' => '🛠️'],
      ['title' => 'REST API', 'description' => 'API terstruktur untuk integrasi sistem dan pertukaran data yang aman.', 'icon' => '🔗'],
      ['title' => 'Sistem Backend', 'description' => 'Sistem backend yang dirancang untuk beban tinggi dan manajemen data cerdas.', 'icon' => '⚙️'],
      ['title' => 'Layanan Cloud', 'description' => 'Penyebaran cloud yang efisien untuk infrastruktur yang dapat diandalkan.', 'icon' => '☁️'],
      ] as $item)
      <article class="glass rounded-3xl border border-white/10 p-8 shadow-lg dark:bg-slate-950/80">
        <div class="inline-flex h-12 w-12 items-center justify-center rounded-2xl bg-cyan-500/10 text-2xl">
          {!! $item['icon'] !!}
        </div>
        <h2 class="mt-6 text-xl font-semibold text-slate-950 dark:text-white">{{ $item['title'] }}</h2>
        <p class="mt-3 text-slate-600 dark:text-slate-300">{{ $item['description'] }}</p>
      </article>
      @endforeach
    </div>
  </div>
</section>

@endsection
