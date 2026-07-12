<div class="hero-card absolute {{ $class }}">
  <a href="{{ $href ?? '#' }}" class="block">
    <div class="hero-card-inner glass transition-default
               group
               flex
               min-w-[13rem]
               items-center
               gap-4
               rounded-2xl
               border
               border-white/60
               bg-white/70
               px-4
               py-3
               shadow-lg
               backdrop-blur-xl
               sm:min-w-[15rem]
               sm:px-5
               sm:py-4
               hover:-translate-y-1
               hover:shadow-2xl
               dark:border-white/10
               dark:bg-slate-950/62">

      <div
        class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-gradient-to-br from-blue-600 to-cyan-500 text-white sm:h-11 sm:w-11">

        {!! $icon !!}

      </div>

      <div>
        <div class="text-[13px] font-semibold text-slate-900 dark:text-white sm:text-sm">
          {{ $title }}
        </div>

        <div class="text-[11px] text-slate-500 dark:text-slate-400 sm:text-xs">
          Powered by Afitech
        </div>
      </div>

    </div>
  </a>
</div>
