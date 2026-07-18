@extends('layouts.auth')

@section('title', 'Reset Password | Afitech')

@section('content')
  <main class="auth-page auth-page-compact">
    <div class="auth-background" aria-hidden="true">
      <span class="auth-glow auth-glow-one"></span>
      <span class="auth-glow auth-glow-two"></span>
      <span class="auth-grid"></span>
    </div>

    <section class="auth-mini-card" aria-labelledby="reset-password-title">
      <a href="{{ route('home') }}" class="auth-mini-brand" aria-label="Kembali ke beranda Afitech">
        <span class="auth-home-logo">A</span>
        <span>Afitech</span>
      </a>

      <p class="auth-kicker">Secure Reset</p>
      <h1 id="reset-password-title">Reset Password</h1>
      <p class="auth-copy">Buat password baru yang kuat untuk menjaga akun Afitech Anda tetap aman.</p>

      <form method="POST" action="{{ route('password.update') }}" class="auth-form" novalidate>
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">

        <div class="auth-field">
          <label for="reset-email">Email</label>
          <input
            id="reset-email"
            type="email"
            name="email"
            value="{{ old('email', $email) }}"
            autocomplete="email"
            placeholder="you@afitech.id"
            required
            @error('email') aria-invalid="true" aria-describedby="reset-email-error" @enderror>
          <p id="reset-email-error" class="auth-error">
            @error('email')
              {{ $message }}
            @enderror
          </p>
        </div>

        <div class="auth-field">
          <label for="reset-password">Password</label>
          <input
            id="reset-password"
            type="password"
            name="password"
            autocomplete="new-password"
            placeholder="Minimal 8 karakter"
            required
            @error('password') aria-invalid="true" aria-describedby="reset-password-error" @enderror>
          <p id="reset-password-error" class="auth-error">
            @error('password')
              {{ $message }}
            @enderror
          </p>
        </div>

        <div class="auth-field">
          <label for="reset-password-confirmation">Confirm Password</label>
          <input
            id="reset-password-confirmation"
            type="password"
            name="password_confirmation"
            autocomplete="new-password"
            placeholder="Ulangi password"
            required>
          <p class="auth-error" aria-hidden="true"></p>
        </div>

        <button type="submit" class="auth-primary-button" data-cursor-hover>
          <span>Reset Password</span>
          <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
            <path d="M5 12h14m-6-6 6 6-6 6" />
          </svg>
        </button>
      </form>

      <a href="{{ route('auth', ['mode' => 'login']) }}" class="auth-return-link">Kembali ke Sign In</a>
    </section>
  </main>
@endsection
