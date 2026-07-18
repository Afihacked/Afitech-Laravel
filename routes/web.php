<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PasswordResetController;
use Illuminate\Support\Facades\Route;

$services = [
    'artificial-intelligence' => [
        'title' => 'Kecerdasan Buatan',
        'subtitle' => 'Otomatisasi keputusan, personalisasi pengalaman, dan pengambilan wawasan dari data.',
        'overview' => 'Solusi AI Afitech membantu bisnis membangun sistem cerdas untuk rekomendasi, analitik, dan automasi yang nyata.',
        'features' => [
            'Model machine learning untuk hasil berbasis data',
            'Otomasi cerdas untuk alur kerja berulang',
            'Wawasan berbasis AI untuk memandu keputusan produk',
        ],
        'callToAction' => 'Diskusikan strategi AI Anda',
    ],
    'web-development' => [
        'title' => 'Pengembangan Web',
        'subtitle' => 'Website responsif, cepat, dan mudah diakses untuk memperkuat kehadiran digital Anda.',
        'overview' => 'Kami membangun website modern dengan arsitektur yang mudah diskalakan, ramah SEO, dan mudah dioperasikan.',
        'features' => [
            'Aplikasi web progresif dengan UI yang rapi',
            'Implementasi antarmuka yang mengutamakan performa',
            'Integrasi backend aman dan siap hosting',
        ],
        'callToAction' => 'Bangun website Anda bersama kami',
    ],
    'cloud-services' => [
        'title' => 'Layanan Cloud',
        'subtitle' => 'Bangun infrastruktur andal yang dapat berkembang sesuai kebutuhan bisnis.',
        'overview' => 'Arsitektur cloud Afitech fokus pada ketersediaan, keamanan, dan pengelolaan biaya yang efisien.',
        'features' => [
            'Dukungan migrasi dan deployment cloud',
            'Layanan terkelola untuk pemantauan dan keandalan',
            'Infrastruktur yang dirancang untuk pertumbuhan dan ketahanan',
        ],
        'callToAction' => 'Rancang infrastruktur cloud yang tangguh',
    ],
    'android-apps' => [
        'title' => 'Aplikasi Android',
        'subtitle' => 'Pengalaman mobile native yang dibangun untuk performa dan kenyamanan pengguna.',
        'overview' => 'Aplikasi Android yang stabil, ringan, dan mudah dikembangkan sejalan kebutuhan pengguna dan bisnis Anda.',
        'features' => [
            'UI mobile yang berpusat pada pengguna dengan interaksi mulus',
            'Fitur offline-first dan waktu muat cepat',
            'Arsitektur berbasis API yang siap berkembang',
        ],
        'callToAction' => 'Mulai proyek aplikasi mobile',
    ],
    'handphone-computer' => [
        'title' => 'Handphone & Komputer',
        'subtitle' => 'Perbaikan, instalasi, dan dukungan teknis untuk handphone dan komputer Anda.',
        'overview' => 'Afitech membantu menjaga perangkat Anda tetap optimal melalui diagnosa masalah, perbaikan, instalasi sistem, dan dukungan teknis yang cepat.',
        'features' => [
            'Diagnosa kerusakan hardware dan software',
            'Instalasi sistem operasi dan aplikasi',
            'Optimasi performa dan perawatan rutin',
        ],
        'callToAction' => 'Dapatkan dukungan untuk perangkat Anda',
    ],
    'rest-api' => [
        'title' => 'REST API',
        'subtitle' => 'API yang terstruktur untuk integrasi aman dan pertukaran data yang mulus.',
        'overview' => 'Kami merancang REST API yang mudah digunakan, terdokumentasi, dan aman untuk semua sistem backend Anda.',
        'features' => [
            'Desain endpoint yang rapi dan strategi versioning',
            'Autentikasi dan pembatasan akses sesuai praktik terbaik',
            'Siap untuk integrasi antarmuka, aplikasi mobile, dan mitra',
        ],
        'callToAction' => 'Buat lapisan API yang andal',
    ],
    'backend-system' => [
        'title' => 'Sistem Backend',
        'subtitle' => 'Arsitektur server-side yang kuat untuk data, logika, dan operasional.',
        'overview' => 'Backend Afitech menawarkan fondasi yang kuat untuk aplikasi, layanan, dan sistem bisnis Anda.',
        'features' => [
            'Desain database yang dioptimalkan untuk performa',
            'Layanan yang mudah diskalakan dengan toleransi gangguan',
            'Otomasi untuk deployment, pemantauan, dan backup',
        ],
        'callToAction' => 'Bangun backend yang tahan lama',
    ],
];

Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/projects', function () {
    return view('pages.projects');
});

Route::get('/blog', function () {
    return view('pages.blog');
});

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', function () {
    return view('pages.contact');
});

Route::post('/contact', [ContactController::class, 'submit']);

Route::middleware('guest')->group(function (): void {
    Route::get('/auth', [AuthController::class, 'show'])->name('auth');
    Route::get('/login', fn () => redirect()->route('auth', ['mode' => 'login']))->name('login');
    Route::get('/register', fn () => redirect()->route('auth', ['mode' => 'register']))->name('register');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

    Route::get('/auth/google', [AuthController::class, 'redirectToGoogle'])->name('auth.google');
    Route::get('/auth/google/callback', [AuthController::class, 'handleGoogleCallback'])->name('auth.google.callback');

    Route::get('/forgot-password', [PasswordResetController::class, 'request'])->name('password.request');
    Route::post('/forgot-password', [PasswordResetController::class, 'email'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordResetController::class, 'reset'])->name('password.reset');
    Route::post('/reset-password', [PasswordResetController::class, 'update'])->name('password.update');
});

Route::post('/logout', [AuthController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/services/{slug}', function ($slug) use ($services) {
    if (!isset($services[$slug])) {
        abort(404);
    }

    return view('pages.service', ['service' => $services[$slug]]);
})->name('services.show');
