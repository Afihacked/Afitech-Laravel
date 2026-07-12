<?php

use Illuminate\Support\Facades\Route;

$services = [
    'artificial-intelligence' => [
        'title' => 'Artificial Intelligence',
        'subtitle' => 'Automate decisions, personalize experiences, and extract intelligence from data.',
        'overview' => 'Solusi AI Afitech membantu bisnis membangun sistem cerdas untuk rekomendasi, analitik, dan automasi yang nyata.',
        'features' => [
            'Machine learning models for data-driven outcomes',
            'Smart automation for repetitive workflows',
            'AI-powered insights to guide product decisions',
        ],
        'callToAction' => 'Talk to us about AI strategy',
    ],
    'web-development' => [
        'title' => 'Web Development',
        'subtitle' => 'Responsive, fast, and accessible websites that strengthen your digital presence.',
        'overview' => 'Kami membangun website modern dengan arsitektur yang scalable, SEO-friendly, dan mudah dioperasikan.',
        'features' => [
            'Progressive web applications with polished UI',
            'Performance-first front-end implementation',
            'Secure backend integration and hosting readiness',
        ],
        'callToAction' => 'Build your next website with us',
    ],
    'cloud-services' => [
        'title' => 'Cloud Services',
        'subtitle' => 'Deploy reliable infrastructure that scales with your business demands.',
        'overview' => 'Arsitektur cloud Afitech fokus pada ketersediaan, keamanan, dan pengelolaan biaya yang efisien.',
        'features' => [
            'Cloud migration and deployment support',
            'Managed services for monitoring and reliability',
            'Infrastructure designed for growth and resilience',
        ],
        'callToAction' => 'Design resilient cloud infrastructure',
    ],
    'android-apps' => [
        'title' => 'Android Apps',
        'subtitle' => 'Native mobile experiences built for performance and user delight.',
        'overview' => 'Aplikasi Android yang stabil, ringan, dan mudah dikembangkan sejalan kebutuhan pengguna dan bisnis Anda.',
        'features' => [
            'User-centric mobile UI with smooth interactions',
            'Offline-first behavior and fast load times',
            'API-driven architecture ready for scale',
        ],
        'callToAction' => 'Start a mobile app project',
    ],
    'rest-api' => [
        'title' => 'REST API',
        'subtitle' => 'Well-structured APIs for secure integrations and seamless data exchange.',
        'overview' => 'Kami merancang REST API yang mudah digunakan, terdokumentasi, dan aman untuk semua sistem backend Anda.',
        'features' => [
            'Clean endpoint design and versioning strategy',
            'Authentication and rate limiting best practices',
            'Ready for frontend, mobile, and partner integrations',
        ],
        'callToAction' => 'Create a reliable API layer',
    ],
    'backend-system' => [
        'title' => 'Backend System',
        'subtitle' => 'Robust server-side architecture for data, logic, and operations.',
        'overview' => 'Backend Afitech menawarkan fondasi yang kuat untuk aplikasi, layanan, dan sistem bisnis Anda.',
        'features' => [
            'Database design optimized for performance',
            'Scalable services with fault tolerance',
            'Automation for deployment, monitoring, and backups',
        ],
        'callToAction' => 'Build a backend that lasts',
    ],
];

Route::get('/', function () {
    return view('pages.home');
});

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

Route::post('/contact', [App\Http\Controllers\ContactController::class, 'submit']);

Route::get('/services/{slug}', function ($slug) use ($services) {
    if (!isset($services[$slug])) {
        abort(404);
    }

    return view('pages.service', ['service' => $services[$slug]]);
})->name('services.show');
