<section
    id="sobre"
    class="relative overflow-hidden bg-white py-20 lg:py-28"
>
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -right-32 top-20
            h-72 w-72 rounded-full border-[42px]
            border-lime-100/60
        "
    ></div>

    <div class="container-site relative">
        <div
            class="
                grid items-center gap-12
                lg:grid-cols-[0.95fr_1.05fr]
                lg:gap-20
            "
        >
            {{-- Imagem --}}
            <div class="relative">
                <div class="relative mx-auto max-w-[570px]">
                    <div
                        aria-hidden="true"
                        class="
                            absolute -bottom-5 -left-5
                            h-[78%] w-[78%]
                            rounded-[2.5rem]
                            bg-lime-300
                        "
                    ></div>

                    <div
                        aria-hidden="true"
                        class="
                            absolute -right-5 -top-5
                            h-[55%] w-[55%]
                            rounded-[2.5rem]
                            bg-zinc-100
                        "
                    ></div>

                    <div
                        class="
                            relative z-10 overflow-hidden
                            rounded-[2.5rem]
                            bg-zinc-200
                            shadow-[0_30px_80px_rgba(24,24,27,0.12)]
                        "
                    >
                        @if (file_exists(public_path('assets/images/about/caio-about2.jpeg')))
                            <img
                                src="{{ asset('assets/images/about/caio-about2.jpeg') }}"
                                alt="Caio Fernandes em atividade profissional"
                                class="
                                    aspect-[4/5] h-full w-full
                                    object-cover object-center
                                "
                            >
                        @else
                            <div
                                class="
                                    flex aspect-[4/5] w-full
                                    items-center justify-center
                                    bg-zinc-200 p-10
                                    text-center text-zinc-500
                                "
                            >
                                Foto profissional do cliente
                            </div>
                        @endif
                    </div>

                    <div
                        class="
                            absolute -bottom-8 right-5 z-20
                            flex h-32 w-32
                            flex-col items-center justify-center
                            rounded-full border-8 border-white
                            bg-green-800 text-center
                            text-white shadow-xl
                            sm:h-36 sm:w-36
                        "
                    >
                        <span class="text-3xl font-black leading-none">
                            20+
                        </span>

                        <span
                            class="
                                mt-1 max-w-[90px]
                                text-xs font-bold uppercase
                                leading-4 tracking-wide
                                text-white/80
                            "
                        >
                            anos de experiência
                        </span>
                    </div>
                </div>
            </div>

            {{-- Conteúdo --}}
            <div>
                <span class="section-eyebrow">
                    Sobre
                </span>

                <h2 class="section-title mt-4">
                    Conhecimento técnico aplicado a soluções ambientais
                    responsáveis
                </h2>

                <p class="section-description mt-6">
                    Caio Fernandes é biólogo e consultor ambiental, com
                    experiência em estudos técnicos, processos de licenciamento
                    e acompanhamento de empreendimentos em diferentes etapas.
                </p>

                <p class="mt-5 max-w-2xl text-base leading-8 text-zinc-600">
                    Seu trabalho combina conhecimento científico, planejamento
                    e responsabilidade para oferecer soluções que atendam às
                    exigências legais sem perder de vista a conservação dos
                    recursos naturais.
                </p>

                <div class="mt-9 grid gap-4 sm:grid-cols-2">
                    <div class="about-feature">
                        <div class="about-feature-icon">
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
                                    d="m5 12 4 4L19 6"
                                />
                            </svg>
                        </div>

                        <div>
                            <strong class="about-feature-title">
                                Atendimento técnico
                            </strong>

                            <span class="about-feature-description">
                                Acompanhamento em todas as etapas do projeto.
                            </span>
                        </div>
                    </div>

                    <div class="about-feature">
                        <div class="about-feature-icon">
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
                                    d="M12 3 4 7v5c0 5 3.5 8.5 8 10 4.5-1.5 8-5 8-10V7l-8-4Z"
                                />

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m9 12 2 2 4-4"
                                />
                            </svg>
                        </div>

                        <div>
                            <strong class="about-feature-title">
                                Segurança e conformidade
                            </strong>

                            <span class="about-feature-description">
                                Projetos alinhados à legislação ambiental.
                            </span>
                        </div>
                    </div>

                    <div class="about-feature">
                        <div class="about-feature-icon">
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
                        </div>

                        <div>
                            <strong class="about-feature-title">
                                Soluções sustentáveis
                            </strong>

                            <span class="about-feature-description">
                                Decisões técnicas com responsabilidade ambiental.
                            </span>
                        </div>
                    </div>

                    <div class="about-feature">
                        <div class="about-feature-icon">
                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="2"
                            >
                                <circle cx="12" cy="12" r="9"></circle>

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 7v5l3 2"
                                />
                            </svg>
                        </div>

                        <div>
                            <strong class="about-feature-title">
                                Agilidade nos processos
                            </strong>

                            <span class="about-feature-description">
                                Organização para reduzir riscos e atrasos.
                            </span>
                        </div>
                    </div>
                </div>

                <div
                    class="
                        mt-8 flex flex-col gap-4
                        rounded-2xl border border-zinc-100
                        bg-zinc-50 p-5
                        sm:flex-row sm:items-center
                        sm:justify-between
                    "
                >
                    <div>
                        <span
                            class="
                                block text-xs font-bold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Registros profissionais
                        </span>

                        <strong
                            class="
                                mt-1 block text-base
                                font-extrabold text-zinc-900
                            "
                        >
                            CRBio 39092/01-D <span class="text-zinc-300">•</span>  DRT 0102375/SP
                        </strong>
                    </div>

                    <span
                        class="
                            inline-flex w-fit rounded-full
                            bg-lime-100 px-4 py-2
                            text-xs font-extrabold uppercase
                            tracking-wide text-green-800
                        "
                    >
                        Biólogo responsável
                    </span>
                </div>

                <div class="mt-9 flex flex-col gap-3 sm:flex-row">
                    <a
                        href="{{ route('sobre') }}"
                        class="button-primary"
                    >
                        Conheça minha trajetória
                    </a>

                    <a
                        href="{{ route('contato') }}"
                        class="button-secondary"
                    >
                        Solicitar atendimento
                    </a>
                </div>
            </div>
        </div>

        {{-- Citação --}}
        <div
            class="
                relative mt-20 overflow-hidden
                rounded-[2rem] bg-green-900
                px-6 py-10
                sm:px-10
                lg:px-16 lg:py-14
            "
        >
            {{-- Assinatura "Você também é responsável" --}}
            <div
                aria-h  idden="true"
                class="
                    pointer-events-none
                    absolute bottom-5 right-6
                    z-10
                    hidden
                    lg:block
                "
            >
                <img
                    src="{{ asset('assets/images/brand/voce-tambem-e-responsavel.png') }}"
                    alt=""
                    class="
                        w-[330px]
                        xl:w-[400px]
                        object-contain
                        brightness-0 invert
                        opacity-80
                    "
                >
            </div>

            {{-- detalhe decorativo --}}
            <div
                aria-hidden="true"
                class="
                    absolute -right-16 -top-20
                    h-64 w-64 rounded-full
                    border-[40px] border-lime-300/10
                "
            ></div>

            <div
                class="
                    relative z-10 grid items-center gap-8
                    lg:grid-cols-[0.25fr_1.75fr]
                "
            >
                <div
                    class="
                        flex h-20 w-20 items-center
                        justify-center rounded-full
                        bg-lime-300 text-4xl
                        font-black text-green-950
                    "
                >
                    “
                </div>

                <div>
                    <blockquote
                        class="
                            max-w-4xl text-2xl font-bold
                            leading-snug tracking-[-0.025em]
                            text-white sm:text-3xl
                        "
                    >
                        Cada projeto ambiental exige técnica, diálogo e
                        responsabilidade para produzir resultados realmente
                        sustentáveis.
                    </blockquote>

                    <div class="mt-6">
                        <strong class="block text-sm font-bold text-lime-300">
                            Caio Fernandes
                        </strong>

                        <span class="mt-1 block text-sm text-white/60">
                            Biólogo e consultor ambiental
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>