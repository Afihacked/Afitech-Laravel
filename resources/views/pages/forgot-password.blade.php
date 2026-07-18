@extends('layouts.auth')

@section('title', 'Forgot Password | Afitech')

@section('content')
  <main class="auth-page auth-page-compact">
    <div class="auth-background" aria-hidden="true">
      <span class="auth-glow auth-glow-one"></span>
      <span class="auth-glow auth-glow-two"></span>
      <span class="auth-grid"></span>
    </div>

    <section class="auth-mini-card" aria-labelledby="forgot-password-title">
      <a href="{{ route('home') }}" class="auth-mini-brand" aria-label="Kembali ke beranda Afitech">
        <span class="auth-home-logo">A</span>
        <span>Afitech</span>
      </a>

      <p class="auth-kicker">Account Recovery</p>
      <h1 id="forgot-password-title">Forgot Password?</h1>
      <p class="auth-copy">Masukkan email akun Anda. Kami akan mengirim link reset password yang aman.</p>

      @if (session('status'))
        <div class="auth-alert" role="status">
          {{ session('status') }}
        </div>
      @endif

      <form method="POST" action="{{ route('password.email') }}" class="auth-form" novalidate>
        @csrf

        <div class="auth-field">
          <label for="recovery-email">Email</label>
          <input
            id="recovery-email"
            type="email"
            name="email"
            value="{{ old('email') }}"
            autocomplete="email"
            placeholder="you@afitech.id"
            required
            @error('email') aria-invalid="true" aria-describedby="recovery-email-error" @enderror>
          <p id="recovery-email-error" class="auth-error">
            @error('email')
              {{ $message }}
            @enderror
          </p>
        </div>

        <button type="submit" class="auth-primary-button" data-cursor-hover>
          <span>Kirim Link Reset</span>
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M5 12h14m-6-6 6 6-6 6" />
          </svg>
        </button>
      </form>

      <a href="{{ route('auth', ['mode' => 'login']) }}" class="auth-return-link">Kembali ke Sign In</a>
    </section>
  </main>
@endsection
