@props([
    'value',
    'label',
    'icon' => 'check',
])

<div
    class="
        group flex items-center gap-5
        border-green-900/10 py-5
        lg:border-r lg:px-6
        last:border-r-0
    "
>
    <div
        class="
            flex h-14 w-14 shrink-0 items-center justify-center
            rounded-full border border-green-950/25
            bg-white/20 text-green-950
            transition duration-300
            group-hover:scale-110 group-hover:bg-white/35
        "
    >
        @switch($icon)
            @case('project')
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

                    <circle cx="12" cy="12" r="10"></circle>
                </svg>
                @break

            @case('experience')
                <svg
                    class="h-7 w-7"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="1.8"
                    aria-hidden="true"
                >
                    <circle cx="12" cy="8" r="5"></circle>

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M8.5 12 7 22l5-3 5 3-1.5-10"
                    />
                </svg>
                @break

            @case('location')
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
                        d="M20 10c0 5-8 12-8 12S4 15 4 10a8 8 0 1 1 16 0Z"
                    />

                    <circle cx="12" cy="10" r="2.5"></circle>
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
                    <circle cx="12" cy="12" r="10"></circle>

                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="m8 12 2.5 2.5L16.5 8"
                    />
                </svg>
        @endswitch
    </div>

    <div>
        <strong
            class="
                block text-3xl font-black leading-none
                tracking-[-0.04em] text-green-950
            "
        >
            {{ $value }}
        </strong>

        <span
            class="
                mt-2 block max-w-[170px] text-sm
                font-medium leading-5 text-green-950/75
            "
        >
            {{ $label }}
        </span>
    </div>
</div>