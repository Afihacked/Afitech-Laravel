@extends('layouts.app')

@section('title', 'Contact | Afitech')

@section('content')

<section class="section-padding relative overflow-hidden py-24">
  <div class="container-afitech">
    <div class="grid gap-12 lg:grid-cols-[1.05fr_.95fr] lg:items-start">
      <div class="max-w-2xl">
        <span class="inline-flex rounded-full bg-cyan-500/10 px-4 py-2 text-sm font-semibold text-cyan-400">
          Let’s talk
        </span>

        <h1 class="mt-6 text-4xl font-black tracking-tight text-slate-950 dark:text-white sm:text-5xl lg:text-6xl">
          Siap bangun solusi digital Anda berikutnya?
        </h1>

        <p class="mt-8 max-w-xl text-lg leading-8 text-slate-600 dark:text-slate-300">
          Hubungi kami untuk diskusi kebutuhan website, aplikasi, backend, atau solusi AI yang dapat mendukung
          pertumbuhan bisnis Anda.
        </p>

        <div class="mt-10 space-y-6">
          <div class="glass rounded-3xl border border-white/10 p-7 dark:bg-slate-950/80">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Email</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">afitech.services@gmail.com</p>
          </div>
          <div class="glass rounded-3xl border border-white/10 p-7 dark:bg-slate-950/80">
            <h2 class="text-xl font-semibold text-slate-950 dark:text-white">Message</h2>
            <p class="mt-3 text-slate-600 dark:text-slate-300">Silakan jelaskan tujuan Anda supaya kami bisa menyiapkan
              solusi paling tepat.</p>
          </div>
        </div>
      </div>

      <div class="glass rounded-[2rem] border border-white/10 bg-slate-950/10 p-10 shadow-2xl dark:bg-slate-900/70">
        @if (session('success'))
        <div
          class="rounded-3xl border border-cyan-300/20 bg-cyan-50 p-6 text-slate-900 dark:border-cyan-500/20 dark:bg-slate-950/80 dark:text-white">
          {{ session('success') }}
        </div>
        @endif

        @if (session('error'))
        <div
          class="rounded-3xl border border-rose-300/20 bg-rose-50 p-6 text-slate-900 dark:border-rose-500/20 dark:bg-slate-950/80 dark:text-white">
          {{ session('error') }}
        </div>
        @endif

        @if ($errors->any())
        <div
          class="rounded-3xl border border-rose-300/20 bg-rose-50 p-6 text-slate-900 dark:border-rose-500/20 dark:bg-slate-950/80 dark:text-white">
          <ul class="list-disc space-y-2 pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
        @endif

        <form method="POST" action="{{ url('/contact') }}" class="space-y-6">
          @csrf
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-200">Nama</label>
            <input name="name" type="text" value="{{ old('name') }}" placeholder="Nama Anda"
              class="mt-3 w-full rounded-3xl border border-slate-200 bg-white/80 px-5 py-4 text-slate-900 outline-none transition-default focus:border-cyan-400 dark:border-white/10 dark:bg-slate-950/80 dark:text-white" />
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-200">Email</label>
            <input name="email" type="email" value="{{ old('email') }}" placeholder="you@example.com"
              class="mt-3 w-full rounded-3xl border border-slate-200 bg-white/80 px-5 py-4 text-slate-900 outline-none transition-default focus:border-cyan-400 dark:border-white/10 dark:bg-slate-950/80 dark:text-white" />
          </div>
          <div>
            <label class="block text-sm font-medium text-slate-700 dark:text-slate-200">Pesan</label>
            <textarea name="message" rows="5" placeholder="Ceritakan kebutuhan Anda"
              class="mt-3 w-full rounded-[1.5rem] border border-slate-200 bg-white/80 px-5 py-4 text-slate-900 outline-none transition-default focus:border-cyan-400 dark:border-white/10 dark:bg-slate-950/80 dark:text-white">{{ old('message') }}</textarea>
          </div>
          <button type="submit"
            class="inline-flex w-full items-center justify-center gap-3 rounded-3xl bg-gradient-to-r from-blue-600 via-cyan-500 to-sky-500 px-6 py-4 text-sm font-semibold text-white shadow-lg transition-default hover:scale-[1.01]">
            Send message
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection