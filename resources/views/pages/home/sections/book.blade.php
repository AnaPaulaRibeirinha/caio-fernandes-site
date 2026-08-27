<section class="relative overflow-hidden bg-green-950 py-20 lg:py-24">
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -right-24 -top-24
            h-80 w-80 rounded-full
            border-[45px] border-lime-300/10
        "
    ></div>

    <div class="container-site relative">
        <div
            class="
                grid items-center gap-12
                lg:grid-cols-[0.85fr_1.15fr]
            "
        >
            {{-- Capa do livro --}}
            <div class="flex justify-center lg:justify-start">
                <div
                    class="
                        relative
                        w-[240px]
                        sm:w-[280px]
                        lg:w-[320px]
                    "
                >
                    <div
                        aria-hidden="true"
                        class="
                            absolute -bottom-5 -right-5
                            h-full w-full
                            rounded-[2rem]
                            bg-lime-300/15
                        "
                    ></div>

                    <img
                        src="{{ asset('assets/images/book/animais-peconhentos.jpg') }}"
                        alt="Capa do livro Animais Peçonhentos: da Preservação à Prevenção"
                        class="
                            relative z-10
                            w-full rounded-[1.5rem]
                            shadow-[0_30px_80px_rgba(0,0,0,0.35)]
                        "
                    >
                </div>
            </div>

            {{-- Conteúdo --}}
            <div>
                <div class="flex flex-wrap items-center gap-3">
                    <span
                        class="
                            inline-flex items-center gap-2
                            text-xs font-extrabold uppercase
                            tracking-[0.18em] text-lime-300
                        "
                    >
                        <span class="h-2 w-2 rounded-full bg-lime-300"></span>

                        Autor do Livro
                    </span>

                </div>

                <h2
                    class="
                        mt-5 max-w-3xl
                        text-4xl font-black leading-tight
                        tracking-[-0.045em] text-white
                        sm:text-5xl
                    "
                >
                    Animais Peçonhentos:
                    <span class="text-lime-300">
                        da Preservação à Prevenção
                    </span>
                </h2>

                <p
                    class="
                        mt-6 max-w-2xl
                        text-base leading-8 text-white/65
                        sm:text-lg
                    "
                >
                    Uma publicação dedicada à conscientização, prevenção
                    de acidentes e valorização da importância ecológica
                    dos animais peçonhentos.
                </p>

                <div
                    class="
                        mt-8 flex flex-col gap-3
                        sm:flex-row
                    "
                >
                    <a
                        href="https://www.amazon.com.br/Animais-Pe%C3%A7onhentos-Caio-Fernandes/dp/6587548091"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="
                            inline-flex min-h-12 items-center
                            justify-center gap-3 rounded-xl
                            bg-lime-300 px-6 py-3
                            text-sm font-extrabold
                            text-green-950 transition
                            hover:-translate-y-1
                            hover:bg-lime-200
                        "
                    >
                        Conheça o livro

                        <svg
                            class="h-4 w-4"
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

                    <a
                        href="{{ route('sobre') }}#livro"
                        class="
                            inline-flex min-h-12 items-center
                            justify-center rounded-xl
                            border border-white/15
                            px-6 py-3 text-sm
                            font-extrabold text-white
                            transition hover:bg-white/10
                        "
                    >
                        Saiba mais
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>