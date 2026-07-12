@extends('layouts.app')

@section('title', 'About | Afitech')

@section('content')

<section class="section-padding relative overflow-hidden py-24">
  <div class="container-afitech">
    <div class="grid gap-12 lg:grid-cols-[1.05fr_.95fr] lg:items-center">
      <div class="max-w-2xl">
        <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-400">
          Company
        </span>

        <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">
          Kami membangun produk digital yang membuat bisnis menjadi lebih adaptif dan kuat.
        </h1>

        <p class="mt-8 max-w-xl text-lg leading-8 text-slate-600 dark:text-slate-300">
          Afitech berdiri untuk membantu tim produk dan pemilik usaha menciptakan website, aplikasi, dan sistem yang siap skalasi dan siap dipakai jangka panjang.
        </p>

        <div class="mt-10 grid gap-4 sm:grid-cols-2">
          <div class="glass rounded-3xl border border-white/10 p-7">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Visi</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">Menjadi partner teknologi yang menjadikan digitalisasi lebih cepat, rapi, dan aman.</p>
          </div>
          <div class="glass rounded-3xl border border-white/10 p-7">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Misi</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">Menyederhanakan transformasi bisnis dengan produk digital berkelas dan implementasi efisien.</p>
          </div>
        </div>
      </div>

      <div class="glass rounded-[2rem] border border-white/10 bg-slate-950/10 p-10 shadow-2xl dark:bg-slate-900/70">
        <p class="text-sm uppercase tracking-[0.22em] text-cyan-300">Why Afitech</p>
        <div class="mt-8 space-y-5">
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Pendekatan kolaboratif</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Setiap solusi dirancang bersama tim Anda agar hasilnya relevan dan mudah digunakan.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Kualitas engineering</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Kode bersih, arsitektur yang siap dikembangkan, dan testing untuk stabilitas.</p>
          </div>
          <div class="rounded-3xl border border-white/10 bg-white/80 p-6 shadow-sm dark:bg-slate-950/80">
            <h3 class="text-lg font-semibold text-slate-950 dark:text-white">Dukungan lanjutan</h3>
            <p class="mt-2 text-slate-600 dark:text-slate-300">Pendampingan pasca-launch agar platform tetap berjalan lancar seiring pertumbuhan bisnis.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="mt-16 grid gap-6 lg:grid-cols-[1fr_1fr]">
      <div class="glass rounded-3xl border border-white/10 p-10 shadow-xl dark:bg-slate-950/80">
        <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Tim Kami</h2>
        <p class="mt-4 text-slate-600 dark:text-slate-300">Tim engineering dan desain kami fokus membangun produk digital yang jelas tujuannya dan mudah dipelihara.</p>
        <ul class="mt-6 space-y-3 text-slate-600 dark:text-slate-300">
          <li>• Arsitek aplikasi modern</li>
          <li>• Spesialis UI/UX</li>
          <li>• Insinyur backend dan API</li>
          <li>• Ahli cloud dan automasi</li>
        </ul>
      </div>
      <div class="glass rounded-3xl border border-white/10 p-10 shadow-xl dark:bg-slate-950/80">
        <h2 class="text-2xl font-semibold text-slate-950 dark:text-white">Value yang kami pegang</h2>
        <ul class="mt-6 space-y-3 text-slate-600 dark:text-slate-300">
          <li>• Keterbukaan dan komunikasi cepat</li>
          <li>• Kecepatan tanpa mengorbankan kualitas</li>
          <li>• Solusi praktis dan mudah dikembangkan</li>
          <li>• Keamanan sebagai prioritas</li>
        </ul>
      </div>
    </div>
  </div>
</section>

@endsection
