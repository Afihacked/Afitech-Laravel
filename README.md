# Afitech Laravel

Afitech Laravel adalah website landing page untuk Afitech, dibangun dengan Laravel 13, Vite, Tailwind CSS 4, dan animasi GSAP. Website ini menampilkan halaman utama modern dengan tema gelap/terang, navigasi terpisah, dan formulir kontak yang mengirim email ke `hello@afitech.id`.

## Fitur Utama

- Halaman Home dengan hero interaktif, gradient dan animasi visual.
- Navigation page terpisah: `Home`, `Projects`, `Blog`, `About`, `Contact`.
- Halaman service dinamis untuk setiap layanan: Artificial Intelligence, Web Development, Android Apps, Backend System, Cloud Services, dan REST API.
- Toggle tema `light/dark` dan custom cursor interaktif.
- Formulir kontak yang mengirim email secara nyata ke `hello@afitech.id`.
- Favicon custom dengan logo `A` gradien sesuai branding navbar.

## Teknologi

- Laravel 13
- PHP 8.3
- Vite
- Tailwind CSS 4
- GSAP untuk animasi
- Blade untuk templating
- Mailer Laravel untuk pengiriman email

## Struktur Halaman

- `resources/views/pages/home.blade.php` — halaman landing utama.
- `resources/views/pages/projects.blade.php` — halaman project/capabilities.
- `resources/views/pages/blog.blade.php` — halaman insight/blog.
- `resources/views/pages/about.blade.php` — halaman tentang Afitech.
- `resources/views/pages/contact.blade.php` — halaman kontak dengan form email.
- `resources/views/pages/service.blade.php` — halaman service dinamis untuk setiap layanan.

## Instalasi & Jalankan

1. Install dependency PHP dan Node:

```bash
composer install
npm install
```

2. Salin environment:

```bash
cp .env.example .env
php artisan key:generate
```

3. Jalankan build dan development server:

```bash
npm run dev
php artisan serve
```

4. Buka browser di `http://localhost:8000` (atau sesuai output `php artisan serve`).

## Konfigurasi Email

Pastikan `.env` diatur untuk mailer yang valid. Contoh sederhana untuk SMTP lokal:

```env
MAIL_MAILER=smtp
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_FROM_ADDRESS=hello@afitech.id
MAIL_FROM_NAME="Afitech"
```

Form kontak akan mengirim email ke `hello@afitech.id` menggunakan `ContactController` dan `ContactFormSubmitted` Mailable.

## GitHub

Repository ini terhubung dengan GitHub: `https://github.com/Afihacked/Afitech-Laravel.git`.

## Menjalankan Commit Cepat

Di project ini sudah tersedia helper lokal untuk menyimpan dan mengirim perubahan dengan cepat:

```bash
git save "pesan commit"
```

## Lisensi

Project ini menggunakan lisensi MIT.
