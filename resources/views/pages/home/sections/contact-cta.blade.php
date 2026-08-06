<section class="bg-white px-4 pb-20 lg:px-0 lg:pb-28">
    <div class="container-site">
        <div
            class="
                relative overflow-hidden rounded-[2.5rem]
                bg-green-950 px-6 py-14
                sm:px-10
                lg:px-16 lg:py-20
            "
        >
            {{-- Decoração circular --}}
            <div
                aria-hidden="true"
                class="
                    pointer-events-none absolute
                    -right-24 -top-24
                    h-80 w-80 rounded-full
                    border-[45px] border-lime-300/15
                "
            ></div>

            {{-- Linhas decorativas --}}
            <div
                aria-hidden="true"
                class="
                    pointer-events-none absolute
                    bottom-0 left-0 h-full w-28
                    opacity-10
                "
                style="
                    background-image: repeating-linear-gradient(
                        90deg,
                        transparent 0,
                        transparent 12px,
                        #d8e957 12px,
                        #d8e957 16px
                    );
                "
            ></div>

            <div
                class="
                    relative z-10 grid items-center gap-10
                    lg:grid-cols-[1fr_auto]
                "
            >
                <div>
                    <span
                        class="
                            inline-flex items-center gap-2
                            text-xs font-extrabold uppercase
                            tracking-[0.18em] text-lime-300
                        "
                    >
                        <span class="h-2 w-2 rounded-full bg-lime-300"></span>

                        Vamos conversar
                    </span>

                    <h2
                        class="
                            mt-5 max-w-3xl
                            text-4xl font-black leading-tight
                            tracking-[-0.045em] text-white
                            sm:text-5xl lg:text-6xl
                        "
                    >
                        Seu projeto precisa de orientação ambiental
                        especializada?
                    </h2>

                    <p
                        class="
                            mt-6 max-w-2xl
                            text-base leading-8 text-white/65
                            sm:text-lg
                        "
                    >
                        Entre em contato para apresentar sua necessidade e
                        entender como o acompanhamento técnico pode contribuir
                        para o seu projeto.
                    </p>
                </div>

                <div
                    class="
                        flex flex-col gap-3
                        sm:flex-row lg:flex-col
                    "
                >
                    <a
                        href="https://wa.me/5515999999999"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="
                            inline-flex min-h-14 items-center
                            justify-center gap-3 rounded-xl
                            bg-lime-300 px-7 py-4
                            text-sm font-extrabold
                            text-green-950 transition
                            hover:-translate-y-1
                            hover:bg-lime-200
                        "
                    >
                        Falar pelo WhatsApp

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
                                d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6A8.38 8.38 0 0 1 12.5 3h.5a8.48 8.48 0 0 1 8 8Z"
                            />
                        </svg>
                    </a>

                    <a
                        href="{{ route('contato') }}"
                        class="
                            inline-flex min-h-14 items-center
                            justify-center gap-3 rounded-xl
                            border border-white/20 px-7 py-4
                            text-sm font-extrabold text-white
                            transition hover:-translate-y-1
                            hover:border-white/40
                            hover:bg-white/10
                        "
                    >
                        Enviar uma mensagem
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>