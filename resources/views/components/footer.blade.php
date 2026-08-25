{{-- <footer class="border-t border-zinc-100 bg-white py-10">
    <div class="container-site">
        <p class="text-sm text-zinc-500">
            © {{ date('Y') }} Caio Fernandes. Todos os direitos reservados.
        </p>
    </div>
</footer> --}}

<footer class="relative overflow-hidden bg-green-950 text-white">
    {{-- Transição arredondada --}}
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute inset-x-0 top-0
            h-16 bg-white
            [clip-path:ellipse(60%_100%_at_50%_0%)]
        "
    ></div>

    {{-- Elementos decorativos --}}
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -right-24 top-20
            h-80 w-80 rounded-full
            border-[45px] border-lime-300/10
        "
    ></div>

    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -bottom-24 -left-24
            h-72 w-72 rounded-full
            border-[38px] border-white/5
        "
    ></div>

    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute bottom-0 right-[18%]
            h-52 w-24 opacity-[0.06]
        "
        style="
            background-image: repeating-linear-gradient(
                90deg,
                transparent 0,
                transparent 11px,
                #d8e957 11px,
                #d8e957 15px
            );
        "
    ></div>

    <div class="container-site relative pb-8 pt-28">
        {{-- Parte principal --}}
        <div
            class="
                grid gap-12
                border-b border-white/10
                pb-16
                lg:grid-cols-[1.2fr_0.8fr_0.9fr_1fr]
                lg:gap-10
            "
        >
            {{-- Marca --}}
            <div>
                <a
                    href="{{ route('home') }}"
                    class="inline-flex items-center"
                    aria-label="Ir para a página inicial"
                >
                    <img
                        src="{{ asset('assets/images/logo/logo-caio-fernandes.png') }}"
                        alt="Caio Fernandes"
                        class="
                            h-auto w-[155px]
                            brightness-0 invert
                        "
                    >
                </a>

                <p
                    class="
                        mt-6 max-w-sm
                        text-sm leading-7 text-white/60
                    "
                >
                    Soluções ambientais para empresas, propriedades e
                    empreendimentos que buscam crescer com responsabilidade,
                    segurança técnica e sustentabilidade.
                </p>

                {{-- Redes sociais --}}
                <div class="mt-7 flex flex-wrap items-center gap-3">
                    {{-- Instagram --}}
                    <a
                        href="https://www.instagram.com/biologo_caio/?hl=pt-br"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="Instagram de Caio Fernandes"
                        title="Instagram"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <rect
                                x="3"
                                y="3"
                                width="18"
                                height="18"
                                rx="5"
                            ></rect>

                            <circle cx="12" cy="12" r="4"></circle>

                            <circle
                                cx="17.5"
                                cy="6.5"
                                r="0.8"
                                fill="currentColor"
                                stroke="none"
                            ></circle>
                        </svg>
                    </a>

                    {{-- LinkedIn --}}
                    <a
                        href="https://www.linkedin.com/in/biologocaio/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="LinkedIn de Caio Fernandes"
                        title="LinkedIn"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <rect
                                x="3"
                                y="3"
                                width="18"
                                height="18"
                                rx="3"
                            ></rect>

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M8 10v7M8 7v.01M12 17v-4a3 3 0 0 1 6 0v4M12 10v7"
                            ></path>
                        </svg>
                    </a>

                    {{-- Facebook --}}
                    <a
                        href="https://www.facebook.com/biologo.caio.fernandes/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="Facebook de Caio Fernandes"
                        title="Facebook"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M14 8h4V3h-4c-4 0-6 2.5-6 6v3H5v5h3v4h5v-4h4l1-5h-5V9c0-.7.3-1 1-1Z"
                            ></path>
                        </svg>
                    </a>

                    {{-- WhatsApp --}}
                    <a
                        href="https://wa.me/5515998546600"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="WhatsApp de Caio Fernandes"
                        title="WhatsApp"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M21 11.5a8.5 8.5 0 0 1-12.3 7.6L3 21l1.9-5.7A8.5 8.5 0 1 1 21 11.5Z"
                            ></path>

                            <path
                                stroke-linecap="round"
                                stroke-linejoin="round"
                                d="M9 8.5c.5 3 2.5 5 5.5 6l1.5-1.5"
                            ></path>
                        </svg>
                    </a>

                    {{-- X --}}
                    <a
                        href="https://x.com/Biologo_Caio"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="X de Caio Fernandes"
                        title="X"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                d="M18.244 2H21.5l-7.11 8.13L22.75 22h-6.546l-5.126-6.707L5.21 22H1.95l7.607-8.697L1.54 2h6.712l4.633 6.124L18.244 2Zm-1.143 18h1.803L7.271 3.895H5.337L17.101 20Z"
                            />
                        </svg>
                    </a>

                    {{-- YouTube --}}
                    <a
                        href="https://www.youtube.com/@biologo_caio"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="footer-social-link"
                        aria-label="YouTube de Caio Fernandes"
                        title="YouTube"
                    >
                        <svg
                            class="h-5 w-5"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="1.8"
                            aria-hidden="true"
                        >
                            <rect
                                x="3"
                                y="6"
                                width="18"
                                height="12"
                                rx="4"
                            ></rect>

                            <path
                                d="m10 9 5 3-5 3V9Z"
                                fill="currentColor"
                                stroke="none"
                            ></path>
                        </svg>
                    </a>

                </div>
            </div>

            {{-- Navegação --}}
            <div>
                <h2 class="footer-title">
                    Navegação
                </h2>

                <nav
                    class="mt-6 flex flex-col gap-3"
                    aria-label="Navegação do rodapé"
                >
                    <a
                        href="{{ route('home') }}"
                        class="footer-link"
                    >
                        Home
                    </a>

                    <a
                        href="{{ route('sobre') }}"
                        class="footer-link"
                    >
                        Sobre
                    </a>

                    <a
                        href="{{ route('servicos.index') }}"
                        class="footer-link"
                    >
                        Serviços
                    </a>

                    <a
                        href="{{ route('projetos.index') }}"
                        class="footer-link"
                    >
                        Projetos
                    </a>

                    <a
                        href="{{ route('clipping.index') }}"
                        class="footer-link"
                    >
                        Clipping
                    </a>

                    <a
                        href="{{ route('contato') }}"
                        class="footer-link"
                    >
                        Contato
                    </a>
                </nav>
            </div>

            {{-- Serviços --}}
            <div>
                <h2 class="footer-title">
                    Serviços
                </h2>

                <nav
                    class="mt-6 flex flex-col gap-3"
                    aria-label="Serviços ambientais"
                >
                    <a
                        href="{{ route('servicos.index') }}#licenciamento-ambiental"
                        class="footer-link"
                    >
                        Licenciamento ambiental
                    </a>

                    <a
                        href="{{ route('servicos.index') }}#estudos-de-fauna"
                        class="footer-link"
                    >
                        Estudos de fauna
                    </a>

                    <a
                        href="{{ route('servicos.index') }}#estudos-de-flora"
                        class="footer-link"
                    >
                        Estudos de flora
                    </a>

                    <a
                        href="{{ route('servicos.index') }}#educacao-ambiental"
                        class="footer-link"
                    >
                        Educação ambiental
                    </a>

                    <a
                        href="{{ route('servicos.index') }}"
                        class="footer-link"
                    >
                        Consultoria técnica
                    </a>
                </nav>
            </div>

            {{-- Contato --}}
            <div>
                <h2 class="footer-title">
                    Entre em contato
                </h2>

                <address class="mt-6 space-y-5 not-italic">
                    {{-- Localização --}}
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg
                                class="h-5 w-5"
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
                                ></path>

                                <circle cx="12" cy="10" r="2.5"></circle>
                            </svg>
                        </div>

                        <div>
                            <strong class="footer-contact-label">
                                Localização
                            </strong>

                            <span class="footer-contact-value">
                                Sorocaba, São Paulo
                            </span>
                        </div>
                    </div>

                    {{-- Telefone --}}
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M22 16.9v3a2 2 0 0 1-2.2 2 19.8 19.8 0 0 1-8.6-3.1 19.5 19.5 0 0 1-6-6A19.8 19.8 0 0 1 2.1 4.2 2 2 0 0 1 4.1 2h3a2 2 0 0 1 2 1.7c.1 1 .4 2 .7 2.9a2 2 0 0 1-.4 2.1L8.1 10a16 16 0 0 0 6 6l1.3-1.3a2 2 0 0 1 2.1-.4c.9.3 1.9.6 2.9.7a2 2 0 0 1 1.6 1.9Z"
                                ></path>
                            </svg>
                        </div>

                        <div>
                            <strong class="footer-contact-label">
                                WhatsApp
                            </strong>

                            <a
                                href="https://wa.me/5515998546600"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="footer-contact-value transition hover:text-lime-300"
                            >
                                (15) 99854-6600
                            </a>
                        </div>
                    </div>

                    {{-- E-mail --}}
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <rect
                                    x="3"
                                    y="5"
                                    width="18"
                                    height="14"
                                    rx="2"
                                ></rect>

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="m3 7 9 6 9-6"
                                ></path>
                            </svg>
                        </div>

                        <div class="min-w-0">
                            <strong class="footer-contact-label">
                                E-mail
                            </strong>

                            <a
                                href="mailto:territorioanimal@gmail.com.br"
                                class="
                                    footer-contact-value
                                    break-all transition
                                    hover:text-lime-300
                                "
                            >
                                territorioanimal@gmail.com.br
                            </a>
                        </div>
                    </div>

                    {{-- Atendimento --}}
                    <div class="footer-contact-item">
                        <div class="footer-contact-icon">
                            <svg
                                class="h-5 w-5"
                                viewBox="0 0 24 24"
                                fill="none"
                                stroke="currentColor"
                                stroke-width="1.8"
                                aria-hidden="true"
                            >
                                <circle cx="12" cy="12" r="9"></circle>

                                <path
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                    d="M12 7v5l3 2"
                                ></path>
                            </svg>
                        </div>

                        <div>
                            <strong class="footer-contact-label">
                                Atendimento
                            </strong>

                            <span class="footer-contact-value">
                                Segunda a sexta, das 8h às 18h
                            </span>
                        </div>
                    </div>
                </address>
            </div>
        </div>

        {{-- Registro e frase --}}
        <div
            class="
                flex flex-col gap-5
                border-b border-white/10
                py-8
                sm:flex-row sm:items-center
                sm:justify-between
            "
        >
            <p
                class="
                    max-w-2xl text-base
                    font-semibold leading-7 text-white/75
                "
            >
                Conectando ciência, responsabilidade e desenvolvimento
                sustentável. Você Também é Responsável!
            </p>

            <div
                class="
                    flex w-fit flex-wrap items-center
                    gap-x-4 gap-y-2 rounded-full
                    border border-white/10
                    bg-white/5 px-5 py-3
                "
            >
                <span
                    class="
                        text-xs font-bold uppercase
                        tracking-wider text-white/45
                    "
                >
                    Registros profissionais
                </span>

                <div class="flex flex-wrap items-center gap-3">
                    <strong class="text-sm font-extrabold text-lime-300">
                        CRBio 39092/01-D
                    </strong>

                    <span
                        aria-hidden="true"
                        class="h-4 w-px bg-white/20"
                    ></span>

                    <strong class="text-sm font-extrabold text-lime-300">
                        DRT  0102375/SP
                    </strong>
                </div>
            </div>
        </div>

        {{-- Rodapé inferior --}}
        <div
            class="
                flex flex-col gap-5 pt-8
                text-sm text-white/45
                md:flex-row md:items-center
                md:justify-between
            "
        >
            <p>
                © {{ date('Y') }} Caio Fernandes Soluções Ambientais.
                Todos os direitos reservados.
            </p>

            <div
                class="
                    flex flex-col gap-4
                    sm:flex-row sm:items-center
                    sm:gap-7
                "
            >
                <a
                    href="#"
                    class="transition hover:text-white"
                >
                    Política de Privacidade
                </a>

                <p class="flex items-center gap-1.5">
                    Desenvolvido com

                    <svg
                        class="
                            h-4 w-4 fill-lime-300
                            text-lime-300
                            transition duration-300
                            hover:scale-125
                        "
                        viewBox="0 0 24 24"
                        aria-label="amor"
                    >
                        <path
                            d="M12 21s-7-4.4-9.4-8.7C.4 8.5 2.4 4 6.7 4c2.2 0 4.1 1.3 5.3 3 1.2-1.7 3.1-3 5.3-3 4.3 0 6.3 4.5 4.1 8.3C19 16.6 12 21 12 21Z"
                        />
                    </svg>

                    por

                    <a
                        href="https://www.linkedin.com/in/ana-paula-melo-ribeiro-5a9ba820b/"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="
                            font-bold text-white/75
                            underline decoration-lime-300/60
                            underline-offset-4
                            transition hover:text-lime-300
                        "
                    >
                        Ana Paula Ribeiro
                    </a>
                </p>
            </div>
        </div>
    </div>

    {{-- Botão de voltar ao topo --}}
    <a
        href="#"
        class="
            fixed bottom-5 right-5 z-40
            flex h-12 w-12 items-center justify-center
            rounded-full border border-white/20
            bg-green-950 text-white
            shadow-[0_14px_35px_rgba(0,0,0,0.22)]
            transition duration-300
            hover:-translate-y-1
            hover:bg-lime-300 hover:text-green-950
        "
        aria-label="Voltar ao topo"
        title="Voltar ao topo"
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
                d="m6 15 6-6 6 6"
            ></path>
        </svg>
    </a>
</footer>