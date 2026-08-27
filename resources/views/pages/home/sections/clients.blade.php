@if ($clients->isNotEmpty())
    <section class="overflow-hidden bg-white py-20 lg:py-24">
        <div class="container-site">

            {{-- Cabeçalho --}}
            <div
                class="
                    flex flex-col gap-6
                    lg:flex-row
                    lg:items-end
                    lg:justify-between
                "
            >
                <div>
                    <span class="section-eyebrow">
                        Clientes
                    </span>

                    <h2 class="section-title mt-5">
                        Empresas e instituições que confiaram no nosso trabalho
                    </h2>

                    <p class="section-description mt-5">
                        Parcerias construídas com responsabilidade técnica,
                        confiança e compromisso com resultados.
                    </p>
                </div>

                {{-- Controles --}}
                <div class="hidden items-center gap-3 sm:flex">
                    <button
                        type="button"
                        class="
                            client-carousel-prev
                            flex h-11 w-11
                            items-center justify-center
                            rounded-full
                            border border-zinc-200
                            bg-white text-zinc-800
                            transition
                            hover:border-lime-300
                            hover:bg-lime-100
                            hover:text-green-800
                        "
                        aria-label="Cliente anterior"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m15 18-6-6 6-6"
                            />
                        </svg>
                    </button>

                    <button
                        type="button"
                        class="
                            client-carousel-next
                            flex h-11 w-11
                            items-center justify-center
                            rounded-full
                            border border-zinc-200
                            bg-white text-zinc-800
                            transition
                            hover:border-lime-300
                            hover:bg-lime-100
                            hover:text-green-800
                        "
                        aria-label="Próximo cliente"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="m9 18 6-6-6-6"
                            />
                        </svg>
                    </button>
                </div>
            </div>

            {{-- Carrossel --}}
            <div
                class="
                    client-carousel
                    mt-12 flex gap-5
                    overflow-x-auto
                    scroll-smooth
                    pb-4
                    [scrollbar-width:none]
                    [&::-webkit-scrollbar]:hidden
                "
            >
                @foreach ($clients as $client)

                    @if ($client->website)
                        <a
                            href="{{ $client->website }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                client-carousel-item
                                group flex
                                min-h-[160px]
                                min-w-[220px]
                                flex-shrink-0
                                items-center justify-center
                                rounded-2xl
                                border border-zinc-200
                                bg-[#f7f8f4]
                                p-8
                                transition duration-300
                                hover:-translate-y-1
                                hover:border-lime-300
                                hover:bg-white
                                hover:shadow-xl
                                hover:shadow-zinc-900/5

                                sm:min-w-[250px]
                                lg:min-w-[280px]
                            "
                            title="{{ $client->name }}"
                        >
                            @if ($client->logo)
                                <img
                                    src="{{ asset('storage/' . $client->logo) }}"
                                    alt="{{ $client->name }}"
                                    class="
                                        max-h-20
                                        max-w-[170px]
                                        object-contain
                                        transition duration-300
                                        group-hover:scale-105

                                        sm:max-h-24
                                        sm:max-w-[190px]
                                    "
                                >
                            @else
                                <strong
                                    class="
                                        text-center
                                        text-base font-extrabold
                                        text-zinc-600
                                    "
                                >
                                    {{ $client->name }}
                                </strong>
                            @endif
                        </a>
                    @else
                        <div
                            class="
                                client-carousel-item
                                flex min-h-[160px]
                                min-w-[220px]
                                flex-shrink-0
                                items-center justify-center
                                rounded-2xl
                                border border-zinc-200
                                bg-[#f7f8f4]
                                p-8

                                sm:min-w-[250px]
                                lg:min-w-[280px]
                            "
                            title="{{ $client->name }}"
                        >
                            @if ($client->logo)
                                <img
                                    src="{{  asset($client->logo) }}"
                                    alt="{{ $client->name }}"
                                    class="
                                        max-h-20
                                        max-w-[170px]
                                        object-contain

                                        sm:max-h-24
                                        sm:max-w-[190px]
                                    "
                                >
                            @else
                                <strong
                                    class="
                                        text-center
                                        text-base font-extrabold
                                        text-zinc-600
                                    "
                                >
                                    {{ $client->name }}
                                </strong>
                            @endif
                        </div>
                    @endif

                @endforeach
            </div>
        </div>
    </section>
@endif

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('.client-carousel');
        const previousButton = document.querySelector('.client-carousel-prev');
        const nextButton = document.querySelector('.client-carousel-next');

        if (!carousel) {
            return;
        }

        const getScrollAmount = () => {
            const item = carousel.querySelector('.client-carousel-item');

            if (!item) {
                return 300;
            }

            return item.getBoundingClientRect().width + 20;
        };

        previousButton?.addEventListener('click', () => {
            carousel.scrollBy({
                left: -getScrollAmount(),
                behavior: 'smooth',
            });
        });

        nextButton?.addEventListener('click', () => {
            carousel.scrollBy({
                left: getScrollAmount(),
                behavior: 'smooth',
            });
        });
    });
</script>
@endpush