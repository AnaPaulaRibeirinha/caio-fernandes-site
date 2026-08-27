@props([
    'title',
    'description',
    'image',
    'category',
    'location',
    'year',
    'url' => '#',
    'featured' => false,
])

<article
    {{ $attributes->merge([
        'class' => $featured
            ? 'group relative overflow-hidden rounded-[2rem] bg-zinc-900 lg:col-span-2'
            : 'group relative overflow-hidden rounded-[2rem] bg-zinc-900',
    ]) }}
>
    <a
        href="{{ $url }}"
        class="relative block h-full min-h-[460px]"
        aria-label="Ver projeto: {{ $title }}"
    >
        {{-- Imagem --}}
        @if ($image)
            <img
                src="{{ asset($image) }}"
                alt="{{ $title }}"
                class="
                    h-full w-full
                    object-cover
                    transition duration-500
                    group-hover:scale-105
                "
            >
        @else
            <div
                class="
                    flex h-full w-full
                    items-center justify-center
                    bg-green-950
                "
            >
                <span
                    class="
                        text-5xl font-black
                        tracking-[-0.08em]
                        text-lime-300/30
                    "
                >
                    CF
                </span>
            </div>
        @endif

        {{-- Camada escura --}}
        <div
            class="
                absolute inset-0
                bg-gradient-to-t
                from-zinc-950
                via-zinc-950/45
                to-transparent
            "
        ></div>

        {{-- Categoria --}}
        <div class="absolute left-6 top-6 z-10">
            <span
                class="
                    inline-flex rounded-full
                    border border-white/20
                    bg-white/15 px-4 py-2
                    text-xs font-extrabold
                    uppercase tracking-[0.12em]
                    text-white backdrop-blur-md
                "
            >
                {{ $category }}
            </span>
        </div>

        {{-- Botão circular --}}
        <div
            class="
                absolute right-6 top-6 z-10
                flex h-12 w-12 items-center justify-center
                rounded-full bg-lime-300
                text-green-950
                transition duration-300
                group-hover:rotate-[-8deg]
                group-hover:scale-110
            "
        >
            <svg
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
                aria-hidden="true"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="M7 17 17 7M7 7h10v10"
                />
            </svg>
        </div>

        {{-- Conteúdo --}}
        <div
            class="
                absolute inset-x-0 bottom-0 z-10
                p-6 sm:p-8
            "
        >
            <div
                class="
                    mb-4 flex flex-wrap items-center
                    gap-x-5 gap-y-2
                    text-xs font-bold uppercase
                    tracking-[0.1em] text-white/65
                "
            >
                <span class="inline-flex items-center gap-2">
                    <svg
                        class="h-4 w-4 text-lime-300"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"
                        />

                        <circle cx="12" cy="10" r="2.5"></circle>
                    </svg>

                    {{ $location }}
                </span>

                <span class="inline-flex items-center gap-2">
                    <svg
                        class="h-4 w-4 text-lime-300"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <rect
                            x="3"
                            y="5"
                            width="18"
                            height="16"
                            rx="2"
                        ></rect>

                        <path d="M16 3v4M8 3v4M3 11h18"></path>
                    </svg>

                    {{ $year }}
                </span>
            </div>

            <h3
                class="
                    max-w-2xl text-2xl font-black
                    leading-tight tracking-[-0.035em]
                    text-white
                    sm:text-3xl
                "
            >
                {{ $title }}
            </h3>

            <p
                class="
                    mt-4 max-w-2xl
                    text-sm leading-6 text-white/70
                    sm:text-base sm:leading-7
                "
            >
                {{ $description }}
            </p>

            <span
                class="
                    mt-6 inline-flex items-center gap-2
                    text-sm font-extrabold text-lime-300
                "
            >
                Ver detalhes do projeto

                <svg
                    class="
                        h-4 w-4 transition-transform duration-300
                        group-hover:translate-x-1
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
</article>