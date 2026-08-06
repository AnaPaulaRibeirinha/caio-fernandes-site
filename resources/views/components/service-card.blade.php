@props([
    'title',
    'description',
    'url' => '#',
    'icon' => 'leaf',
])

<article
    {{ $attributes->merge([
        'class' => '
            group relative flex h-full min-h-[330px] flex-col
            overflow-hidden rounded-[1.75rem] border border-zinc-100
            bg-white p-7 shadow-[0_16px_50px_rgba(24,24,27,0.05)]
            transition duration-300
            hover:-translate-y-2
            hover:border-lime-300
            hover:shadow-[0_24px_60px_rgba(42,80,35,0.12)]
        ',
    ]) }}
>
    {{-- Forma decorativa --}}
    <div
        aria-hidden="true"
        class="
            absolute -right-12 -top-12 h-32 w-32 rounded-full
            bg-lime-100 opacity-0 transition duration-300
            group-hover:scale-125 group-hover:opacity-100
        "
    ></div>

    {{-- Ícone --}}
    <div
        class="
            relative z-10 mb-8 flex h-14 w-14 items-center justify-center
            rounded-2xl bg-lime-100 text-green-700
            transition duration-300
            group-hover:bg-lime-400 group-hover:text-green-950
        "
    >
        @switch($icon)
            @case('document')
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M14 2v6h6M8 13h8M8 17h5"
                    />
                </svg>
                @break

            @case('fauna')
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <circle cx="7.5" cy="6.5" r="2"></circle>
                    <circle cx="16.5" cy="6.5" r="2"></circle>
                    <circle cx="5" cy="12" r="2"></circle>
                    <circle cx="19" cy="12" r="2"></circle>

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.2 17.8c0-2.4 1.7-4.3 3.8-4.3s3.8 1.9 3.8 4.3c0 1.8-1.3 3.2-3.1 3.2h-1.4c-1.8 0-3.1-1.4-3.1-3.2Z"
                    />
                </svg>
                @break

            @case('flora')
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 22V8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 13c-3.5 0-5-2.5-5-6 3.5 0 7 1.5 7 5"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13 9c0-4 3-7 8-7 0 5-2.5 8-7 8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 17c2-2 4.5-3 8-3 0 4-2.5 7-7 7"
                    />
                </svg>
                @break

            @case('education')
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m3 10 9-5 9 5-9 5-9-5Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M7 12.5V17c3 2.5 7 2.5 10 0v-4.5"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M21 10v6"
                    />
                </svg>
                @break

            @default
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M12 22V8"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M5 12c-2.5-4 0-8 6-9 1 6-1 9-6 9Z"
                    />

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M13 15c1-4 4-6 9-5 0 5-3 8-8 8"
                    />
                </svg>
        @endswitch
    </div>

    {{-- Conteúdo --}}
    <div class="relative z-10 flex flex-1 flex-col">
        <h3
            class="
                max-w-[220px] text-2xl font-extrabold leading-tight
                tracking-[-0.035em] text-zinc-950
            "
        >
            {{ $title }}
        </h3>

        <p class="mt-5 text-sm leading-6 text-zinc-600">
            {{ $description }}
        </p>

        <a
            href="{{ $url }}"
            class="
                mt-auto inline-flex items-center gap-2 pt-8
                text-sm font-extrabold text-green-700
                transition-colors hover:text-green-900
            "
            aria-label="Saiba mais sobre {{ $title }}"
        >
            Saiba mais

            <svg
                class="
                    h-4 w-4 transition-transform duration-200
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
        </a>
    </div>
</article>