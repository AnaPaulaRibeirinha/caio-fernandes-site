@props([
    'title',
    'excerpt',
    'image',
    'source',
    'date',
    'url' => '#',
    'featured' => false,
])

<article
    {{ $attributes->merge([
        'class' => $featured
            ? 'group relative h-full overflow-hidden rounded-[2rem] bg-zinc-900'
            : 'group grid overflow-hidden rounded-[1.5rem] border border-zinc-100 bg-white shadow-[0_15px_45px_rgba(24,24,27,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_22px_55px_rgba(24,24,27,0.10)] sm:grid-cols-[180px_1fr]',
    ]) }}
>
    @if ($featured)
        <a
            href="{{ $url }}"
            class="relative block min-h-[520px]"
            aria-label="Ler matéria: {{ $title }}"
        >
            @if (file_exists(public_path($image)))
                <img
                    src="{{ asset($image) }}"
                    alt="{{ $title }}"
                    class="
                        absolute inset-0 h-full w-full object-cover
                        transition duration-700
                        group-hover:scale-105
                    "
                >
            @else
                <div
                    class="
                        absolute inset-0
                        bg-gradient-to-br
                        from-green-950
                        via-green-800
                        to-lime-700
                    "
                ></div>
            @endif

            <div
                class="
                    absolute inset-0
                    bg-gradient-to-t
                    from-zinc-950
                    via-zinc-950/45
                    to-transparent
                "
            ></div>

            <div class="absolute left-6 top-6 z-10">
                <span
                    class="
                        rounded-full border border-white/20
                        bg-white/15 px-4 py-2
                        text-xs font-extrabold uppercase
                        tracking-[0.12em] text-white
                        backdrop-blur-md
                    "
                >
                    Destaque
                </span>
            </div>

            <div class="absolute inset-x-0 bottom-0 z-10 p-7 sm:p-10">
                <div
                    class="
                        flex flex-wrap items-center gap-3
                        text-xs font-bold uppercase
                        tracking-[0.1em] text-white/65
                    "
                >
                    <span class="text-lime-300">
                        {{ $source }}
                    </span>

                    <span aria-hidden="true">•</span>

                    <time>{{ $date }}</time>
                </div>

                <h3
                    class="
                        mt-5 max-w-3xl
                        text-3xl font-black leading-tight
                        tracking-[-0.04em] text-white
                        sm:text-4xl
                    "
                >
                    {{ $title }}
                </h3>

                <p
                    class="
                        mt-4 max-w-2xl
                        text-sm leading-7 text-white/70
                        sm:text-base
                    "
                >
                    {{ $excerpt }}
                </p>

                <span
                    class="
                        mt-7 inline-flex items-center gap-2
                        text-sm font-extrabold text-lime-300
                    "
                >
                    Ler matéria

                    <svg
                        class="
                            h-4 w-4 transition-transform
                            duration-300 group-hover:translate-x-1
                        "
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-6-6 6 6-6 6"
                        />
                    </svg>
                </span>
            </div>
        </a>
    @else
        <div class="relative min-h-[210px] overflow-hidden bg-zinc-100">
            @if (file_exists(public_path($image)))
                <img
                    src="{{ asset($image) }}"
                    alt="{{ $title }}"
                    class="
                        absolute inset-0 h-full w-full object-cover
                        transition duration-500
                        group-hover:scale-105
                    "
                >
            @else
                <div
                    class="
                        absolute inset-0
                        bg-gradient-to-br
                        from-green-900
                        to-lime-600
                    "
                ></div>
            @endif
        </div>

        <div class="flex flex-col p-6">
            <div
                class="
                    flex flex-wrap items-center gap-2
                    text-[0.7rem] font-extrabold
                    uppercase tracking-[0.1em]
                    text-zinc-500
                "
            >
                <span class="text-green-700">
                    {{ $source }}
                </span>

                <span aria-hidden="true">•</span>

                <time>{{ $date }}</time>
            </div>

            <h3
                class="
                    mt-4 text-xl font-black
                    leading-snug tracking-[-0.03em]
                    text-zinc-950
                "
            >
                {{ $title }}
            </h3>

            <p class="mt-3 text-sm leading-6 text-zinc-600">
                {{ $excerpt }}
            </p>

            <a
                href="{{ $url }}"
                class="
                    mt-auto inline-flex items-center
                    gap-2 pt-6 text-sm
                    font-extrabold text-green-700
                "
                aria-label="Ler matéria: {{ $title }}"
            >
                Ler matéria

                <svg
                    class="
                        h-4 w-4 transition-transform
                        duration-300 group-hover:translate-x-1
                    "
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12h14m-6-6 6 6-6 6"
                    />
                </svg>
            </a>
        </div>
    @endif
</article>