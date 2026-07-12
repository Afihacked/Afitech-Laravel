<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Mail\ContactFormSubmitted;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(ContactFormRequest $request): RedirectResponse
    {
        $data = $request->validated();

        try {
            Mail::to('afitech.services@gmail.com')->send(new ContactFormSubmitted($data));

            if (!empty(Mail::failures())) {
                return back()->with('error', 'Email gagal dikirim. Silakan coba lagi nanti.');
            }

            return back()->with('success', 'Pesan Anda telah dikirim. Kami akan segera menghubungi Anda.');
        } catch (\Throwable $exception) {
            Log::error('Contact form email failed: '.$exception->getMessage());

            return back()->with('error', 'Terjadi kesalahan saat mengirim email. Silakan coba lagi nanti.');
        }
    }
}