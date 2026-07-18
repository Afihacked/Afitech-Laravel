@extends('layouts.auth')

@section('title', 'Masuk | Afitech')

@php
  $activeMode = old('auth_mode', $mode ?? 'login') === 'register' ? 'register' : 'login';
  $isRegister = $activeMode === 'register';
@endphp

@section('content')
  <main class="auth-page">
    <div class="auth-background" aria-hidden="true">
      <span class="auth-glow auth-glow-one"></span>
      <span class="auth-glow auth-glow-two"></span>
      <span class="auth-grid"></span>
    </div>

    <a href="{{ route('home') }}" class="auth-home-link" aria-label="Kembali ke beranda Afitech">
      <span class="auth-home-logo">A</span>
      <span>Afitech</span>
    </a>

    <section
      class="auth-card {{ $isRegister ? 'is-register' : '' }}"
      data-auth-shell
      data-mode="{{ $activeMode }}"
      aria-label="Authentication Afitech">
      <div class="auth-form-panel auth-login-panel" data-auth-panel="login-form">
        <div class="auth-form-inner">
          <p class="auth-kicker">Welcome back</p>
          <h1>Sign In</h1>
          <p class="auth-copy">Masuk untuk mengelola proyek, konsultasi, dan layanan Afitech Anda.</p>

          @if (session('auth_status'))
            <div class="auth-alert" role="status">
              {{ session('auth_status') }}
            </div>
          @endif

          <div class="auth-social-row" aria-label="Opsi login sosial">
            <a href="{{ route('auth.google') }}" class="auth-social-button" aria-label="Sign in dengan Google" data-cursor-hover>
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18A10.96 10.96 0 0 0 1 12c0 1.77.42 3.45 1.18 4.94l3.66-2.84z" />
                <path fill="#EA4335" d="M12 5.37c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06L5.84 9.9C6.71 7.3 9.14 5.37 12 5.37z" />
              </svg>
            </a>
          </div>

          <p class="auth-divider-text">or use your account</p>

          <form method="POST" action="{{ route('login.store') }}" class="auth-form" novalidate>
            @csrf
            <input type="hidden" name="auth_mode" value="login">

            <div class="auth-field">
              <label for="login-email">Email</label>
              <input
                id="login-email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="email"
                placeholder="you@afitech.id"
                required
                @error('email', 'login') aria-invalid="true" aria-describedby="login-email-error" @enderror>
              <p id="login-email-error" class="auth-error">
                @error('email', 'login')
                  {{ $message }}
                @enderror
              </p>
            </div>

            <div class="auth-field">
              <label for="login-password">Password</label>
              <input
                id="login-password"
                type="password"
                name="password"
                autocomplete="current-password"
                placeholder="Masukkan password"
                required
                @error('password', 'login') aria-invalid="true" aria-describedby="login-password-error" @enderror>
              <p id="login-password-error" class="auth-error">
                @error('password', 'login')
                  {{ $message }}
                @enderror
              </p>
            </div>

            <div class="auth-options">
              <label class="auth-check">
                <input type="checkbox" name="remember" value="1" @checked(old('remember'))>
                <span>Remember me</span>
              </label>

              <a href="{{ route('password.request') }}">Forgot Password?</a>
            </div>

            <button type="submit" class="auth-primary-button" data-cursor-hover>
              <span>Sign In</span>
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M5 12h14m-6-6 6 6-6 6" />
              </svg>
            </button>
          </form>
        </div>
      </div>

      <div class="auth-form-panel auth-register-panel" data-auth-panel="register-form">
        <div class="auth-form-inner">
          <p class="auth-kicker">Start with Afitech</p>
          <h1>Sign Up</h1>
          <p class="auth-copy">Buat akun untuk memulai kebutuhan website, sistem, cloud, dan konsultasi digital.</p>

          <div class="auth-social-row" aria-label="Opsi register sosial">
            <a href="{{ route('auth.google') }}" class="auth-social-button" aria-label="Sign up dengan Google" data-cursor-hover>
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                <path fill="#FBBC05" d="M5.84 14.1c-.22-.66-.35-1.36-.35-2.1s.13-1.44.35-2.1V7.06H2.18A10.96 10.96 0 0 0 1 12c0 1.77.42 3.45 1.18 4.94l3.66-2.84z" />
                <path fill="#EA4335" d="M12 5.37c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.06L5.84 9.9C6.71 7.3 9.14 5.37 12 5.37z" />
              </svg>
            </a>
          </div>

          <p class="auth-divider-text">or use your email</p>

          <form method="POST" action="{{ route('register.store') }}" class="auth-form" novalidate>
            @csrf
            <input type="hidden" name="auth_mode" value="register">

            <div class="auth-field">
              <label for="register-name">Name</label>
              <input
                id="register-name"
                type="text"
                name="name"
                value="{{ old('name') }}"
                autocomplete="name"
                placeholder="Nama lengkap"
                required
                @error('name', 'register') aria-invalid="true" aria-describedby="register-name-error" @enderror>
              <p id="register-name-error" class="auth-error">
                @error('name', 'register')
                  {{ $message }}
                @enderror
              </p>
            </div>

            <div class="auth-field">
              <label for="register-email">Email</label>
              <input
                id="register-email"
                type="email"
                name="email"
                value="{{ old('email') }}"
                autocomplete="email"
                placeholder="you@afitech.id"
                required
                @error('email', 'register') aria-invalid="true" aria-describedby="register-email-error" @enderror>
              <p id="register-email-error" class="auth-error">
                @error('email', 'register')
                  {{ $message }}
                @enderror
              </p>
            </div>

            <div class="auth-field">
              <label for="register-password">Password</label>
              <input
                id="register-password"
                type="password"
                name="password"
                autocomplete="new-password"
                placeholder="Minimal 8 karakter"
                required
                @error('password', 'register') aria-invalid="true" aria-describedby="register-password-error" @enderror>
              <p id="register-password-error" class="auth-error">
                @error('password', 'register')
                  {{ $message }}
                @enderror
              </p>
            </div>

            <div class="auth-field">
              <label for="register-password-confirmation">Confirm Password</label>
              <input
                id="register-password-confirmation"
                type="password"
                name="password_confirmation"
                autocomplete="new-password"
                placeholder="Ulangi password"
                required>
              <p class="auth-error" aria-hidden="true"></p>
            </div>

            <button type="submit" class="auth-primary-button" data-cursor-hover>
              <span>Sign Up</span>
              <svg viewBox="0 0 24 24" aria-hidden="true" focusable="false">
                <path d="M5 12h14m-6-6 6 6-6 6" />
              </svg>
            </button>
          </form>
        </div>
      </div>

      <div class="auth-overlay-panel" aria-live="polite">
        <div class="auth-welcome auth-welcome-login" data-auth-welcome="login">
          <p>Afitech Account</p>
          <h2>Hello, Friend!</h2>
          <span>Daftarkan akun baru dan mulai akses layanan digital Afitech dalam satu tempat.</span>
          <button type="button" class="auth-ghost-button" data-auth-target="register" data-cursor-hover>
            Sign Up
          </button>
        </div>

        <div class="auth-welcome auth-welcome-register" data-auth-welcome="register">
          <p>Already connected?</p>
          <h2>Welcome Back!</h2>
          <span>Masuk kembali untuk melanjutkan konsultasi, proyek, dan kebutuhan teknologi Anda.</span>
          <button type="button" class="auth-ghost-button" data-auth-target="login" data-cursor-hover>
            Sign In
          </button>
        </div>
      </div>
    </section>
  </main>
@endsection
