<div id="whatsapp-widget" class="fixed inset-x-auto bottom-24 right-6 z-50 flex items-end justify-end">
  <button
    type="button"
    data-whatsapp-open
    aria-label="Buka chat WhatsApp"
    style="opacity:0; transform: translateY(16px);"
    class="group relative flex h-14 w-14 items-center justify-center rounded-full bg-gradient-to-br from-emerald-500 via-lime-400 to-cyan-500 text-white shadow-[0_20px_60px_-20px_rgba(16,185,129,0.8)] ring-1 ring-white/10 transition duration-300 hover:-translate-y-1 hover:shadow-[0_25px_80px_-30px_rgba(16,185,129,0.9)] focus:outline-none focus:ring-4 focus:ring-emerald-300/40">

    <span class="absolute inset-0 rounded-full bg-white/10 opacity-0 transition duration-300 group-hover:opacity-100"></span>

    <span class="relative flex h-10 w-10 items-center justify-center rounded-full bg-slate-950/10 backdrop-blur-sm text-white shadow-lg shadow-slate-950/30">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-6 w-6">
        <path fill="currentColor" d="M17.472 14.382c-.297-.149-1.758-.868-2.03-.967-.273-.099-.472-.149-.672.149-.198.297-.768.967-.942 1.166-.173.198-.347.223-.644.074-.297-.149-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.447-.52.149-.173.198-.297.298-.495.099-.198.05-.372-.025-.52-.074-.149-.672-1.611-.92-2.212-.242-.579-.487-.5-.672-.51l-.572-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.064 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.71.307 1.263.49 1.694.627.712.227 1.36.195 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414-.074-.123-.273-.198-.57-.347z"/>
        <path fill="currentColor" d="M12.004 2.004c-5.523 0-10 4.477-10 10 0 1.77.464 3.426 1.276 4.86L2 22l5.36-1.415A9.966 9.966 0 0 0 12.003 22c5.523 0 10-4.477 10-10s-4.477-9.996-9.999-9.996zm0 18.304c-1.497 0-2.958-.358-4.257-1.035l-.305-.17-3.186.84.85-3.106-.197-.319A7.962 7.962 0 0 1 4.004 12.004c0-4.411 3.589-7.999 7.999-7.999s8 3.588 8 7.999-3.588 7.999-7.999 7.999z"/>
      </svg>
    </span>
  </button>

  <div data-whatsapp-overlay class="hidden fixed inset-0 z-50 flex items-end justify-end bg-slate-950/40 p-4 backdrop-blur-sm" aria-hidden="true">
    <div data-whatsapp-modal class="w-full max-w-sm overflow-hidden rounded-[2rem] border border-white/10 bg-slate-950/95 text-white shadow-2xl shadow-slate-950/40 mb-20 mr-6">
      <div class="flex items-center justify-between gap-3 border-b border-white/10 px-4 py-4">
        <div>
          <p class="text-sm font-semibold uppercase tracking-[0.24em] text-emerald-300">WhatsApp</p>
          <h3 class="mt-1 text-lg font-semibold">Kirim pesan cepat</h3>
        </div>
        <button type="button" data-whatsapp-close aria-label="Tutup chat" class="rounded-2xl border border-white/10 bg-white/5 p-2 text-white transition hover:bg-white/10 focus:outline-none focus:ring-2 focus:ring-emerald-300/50">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5">
            <path fill="currentColor" d="M18.3 5.71a1 1 0 0 0-1.41 0L12 10.59 7.11 5.7A1 1 0 0 0 5.7 7.11L10.59 12l-4.88 4.89a1 1 0 1 0 1.41 1.41L12 13.41l4.89 4.88a1 1 0 0 0 1.41-1.41L13.41 12l4.88-4.89a1 1 0 0 0 0-1.4z"/>
          </svg>
        </button>
      </div>

      <div class="space-y-4 px-4 py-4">
        <div class="rounded-3xl bg-slate-900/95 p-4 text-slate-300 shadow-inner shadow-slate-950/20">
          <p class="text-sm">Halo! Ketik pesan Anda di bawah ini, lalu ketuk <span class="font-semibold text-white">Kirim</span> untuk melanjutkan ke WhatsApp.</p>
        </div>

        <textarea
          data-whatsapp-input
          rows="5"
          class="w-full resize-none rounded-3xl border border-white/10 bg-slate-950/95 px-4 py-3 text-sm leading-6 text-white outline-none ring-1 ring-transparent transition focus:border-emerald-300 focus:ring-emerald-300/30"
          placeholder="Tulis pesanmu di sini..."
        ></textarea>
      </div>

      <div class="flex items-center justify-between gap-3 border-t border-white/10 px-4 py-4">
        <div class="text-xs text-slate-400">Nomor: +62 851-8325-0090</div>
        <button type="button" data-whatsapp-send class="inline-flex items-center gap-2 rounded-2xl bg-emerald-500 px-4 py-3 text-sm font-semibold text-slate-950 transition hover:bg-emerald-400 focus:outline-none focus:ring-4 focus:ring-emerald-300/40">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="h-5 w-5 text-slate-950">
            <path fill="currentColor" d="M3.44 20.44a1 1 0 0 0 1.1.16l18-8a1 1 0 0 0 0-1.84l-18-8A1 1 0 0 0 3 3.62v4.27L17.79 12 3 16.11v4.27a1 1 0 0 0 .44.06z"/>
          </svg>
          Kirim
        </button>
      </div>
    </div>
  </div>
</div>
