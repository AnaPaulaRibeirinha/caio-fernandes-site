<section
    class="relative min-h-[820px] overflow-hidden bg-white pt-32 lg:min-h-[760px] lg:pt-24"
>
    {{-- Elemento decorativo esquerdo --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -left-20 top-20 h-80 w-40 overflow-hidden rounded-r-full bg-green-700 lg:-left-24 lg:top-28 lg:h-[440px] lg:w-52"
    >
        <div
            class="absolute inset-x-0 bottom-0 h-1/2"
            style="
                background-image: repeating-linear-gradient(
                    90deg,
                    transparent 0,
                    transparent 13px,
                    rgba(190, 216, 63, 0.95) 13px,
                    rgba(190, 216, 63, 0.95) 17px
                );
            "
        ></div>
    </div>

    {{-- Elemento decorativo direito --}}
    <div
        aria-hidden="true"
        class="pointer-events-none absolute -right-16 top-28 hidden h-64 w-40 overflow-hidden rounded-l-full lg:block"
    >
        <div
            class="h-full w-full"
            style="
                background-image: repeating-linear-gradient(
                    90deg,
                    transparent 0,
                    transparent 12px,
                    rgba(31, 111, 62, 0.9) 12px,
                    rgba(31, 111, 62, 0.9) 17px
                );
            "
        ></div>
    </div>

    <div class="container-site relative h-full">
        <div
            class="grid min-h-[650px] items-center gap-10 lg:grid-cols-[0.9fr_1.1fr]"
        >
            {{-- Conteúdo --}}
            <div class="relative z-20 max-w-2xl py-10 lg:py-24">
                <span
                    class="mb-5 inline-flex items-center gap-2 text-xs font-extrabold uppercase tracking-[0.18em] text-lime-600"
                >
                    <span class="h-2 w-2 rounded-full bg-lime-500"></span>

                    Soluções ambientais
                </span>

                <h1
                    class="max-w-[720px] text-5xl font-black leading-[0.98] tracking-[-0.055em] text-zinc-950 sm:text-6xl lg:text-[72px]"
                >
                    Ciência, experiência e responsabilidade em cada projeto.
                </h1>

                <p
                    class="mt-7 max-w-xl text-base leading-7 text-zinc-600 sm:text-lg"
                >
                    Atuamos com licenciamento ambiental, estudos de fauna e
                    flora, educação ambiental e consultoria técnica para
                    empresas que querem crescer de maneira responsável.
                </p>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a
                        href="{{ route('servicos.index') }}"
                        class="button-primary"
                    >
                        Conheça os serviços

                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M5 12h14m-6-6 6 6-6 6"
                            />
                        </svg>
                    </a>

                    <a
                        href="{{ route('sobre') }}"
                        class="button-secondary border-transparent bg-transparent"
                    >
                        Saiba mais sobre mim

                        <svg
                            class="h-4 w-4"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 18l6-6-6-6"
                            />
                        </svg>
                    </a>
                </div>
            </div>

            {{-- Imagem --}}
            <div
                class="relative z-10 flex min-h-[480px] items-end justify-center self-end lg:min-h-[680px]"
            >
                {{-- Fundo cinza com silhueta --}}
                <div
                    aria-hidden="true"
                    class="absolute bottom-10 right-0 h-[72%] w-[85%] rounded-t-[48%] bg-zinc-100/80"
                ></div>

                {{-- Círculo verde --}}
                <div
                    aria-hidden="true"
                    class="absolute bottom-16 right-[-6%] h-72 w-72 rounded-full bg-lime-400/80 sm:h-96 sm:w-96 lg:h-[440px] lg:w-[440px]"
                ></div>

                {{-- Marca d'água --}}
                <div
                    aria-hidden="true"
                    class="absolute bottom-8 left-0 hidden text-[180px] font-black leading-none tracking-[-0.1em] text-zinc-200/50 lg:block"
                >
                    CF
                </div>

                <img
                    src="{{ asset('assets/images/hero/caio-fernandes.png') }}"
                    alt="Caio Fernandes, biólogo e consultor ambiental"
                    class="relative z-20 max-h-[630px] w-auto max-w-full object-contain object-bottom"
                >
            </div>
        </div>
    </div>
</section>