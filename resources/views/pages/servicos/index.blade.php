@extends('layouts.site')

@section('title', 'Serviços | Caio Fernandes')

@section(
    'meta_description',
    'Licenciamento ambiental, estudos de fauna e flora, educação ambiental e consultoria técnica.'
)

@section('content')

    {{-- Hero --}}
    <section
        class="
            relative overflow-hidden
            bg-[#f7f8f4]
            pb-20 pt-36
            lg:pb-24 lg:pt-40
        "
    >
        {{-- Decoração esquerda --}}
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute
                -left-28 top-24
                h-72 w-72
                rounded-full
                border-[38px]
                border-lime-300/25
            "
        ></div>

        {{-- Decoração direita --}}
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute
                -right-20 top-16
                h-[420px] w-[420px]
                rounded-full
                bg-lime-300/45
            "
        ></div>

        <div class="container-site relative z-10">
            <div
                class="
                    grid items-center gap-14
                    lg:grid-cols-[1.1fr_0.9fr]
                "
            >
                {{-- Conteúdo --}}
                <div>
                    <span
                        class="
                            inline-flex items-center gap-2
                            text-xs font-extrabold uppercase
                            tracking-[0.18em]
                            text-lime-600
                        "
                    >
                        <span
                            class="
                                h-2 w-2
                                rounded-full
                                bg-lime-500
                            "
                        ></span>

                        Soluções ambientais
                    </span>

                    <h1
                        class="
                            mt-5 max-w-4xl
                            text-5xl font-black
                            leading-[0.98]
                            tracking-[-0.055em]
                            text-zinc-950
                            sm:text-6xl
                            lg:text-7xl
                        "
                    >
                        Soluções técnicas para
                        <span class="text-green-800">
                            diferentes necessidades.
                        </span>
                    </h1>

                    <p
                        class="
                            mt-7 max-w-2xl
                            text-base leading-8
                            text-zinc-600
                            sm:text-lg
                        "
                    >
                        Acompanhamento especializado para empresas,
                        propriedades, empreendimentos e instituições que
                        precisam atender exigências ambientais com segurança,
                        responsabilidade e orientação técnica.
                    </p>

                    <div
                        class="
                            mt-9 flex flex-col gap-3
                            sm:flex-row
                        "
                    >
                        <a
                            href="#servicos"
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
                                    d="M12 5v14m-6-6 6 6 6-6"
                                />
                            </svg>
                        </a>

                        <a
                            href="{{ route('contato') }}"
                            class="button-secondary"
                        >
                            Falar sobre um projeto
                        </a>
                    </div>
                </div>

                {{-- Composição dos serviços --}}
                <div
                    class="
                        relative hidden
                        min-h-[430px]
                        lg:block
                    "
                >
                    {{-- Fundo --}}
                    <div
                        aria-hidden="true"
                        class="
                            absolute
                            inset-10
                            rounded-[3rem]
                            bg-white/70
                        "
                    ></div>

                    {{-- Licenciamento --}}
                    <div
                        class="
                            absolute
                            left-4 top-6
                            w-[230px]
                            rounded-2xl
                            border border-white
                            bg-white p-5
                            shadow-xl
                            shadow-zinc-900/5
                        "
                    >
                        <div
                            class="
                                flex h-11 w-11
                                items-center justify-center
                                rounded-xl
                                bg-lime-100
                                text-green-700
                            "
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
                                    d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"
                                />
                                <path d="M14 2v6h6" />
                                <path d="M8 13h8M8 17h6" />
                            </svg>
                        </div>

                        <strong
                            class="
                                mt-4 block
                                text-base font-black
                                text-zinc-950
                            "
                        >
                            Licenciamento Ambiental
                        </strong>
                    </div>

                    {{-- Fauna --}}
                    <div
                        class="
                            absolute
                            right-0 top-24
                            w-[220px]
                            rounded-2xl
                            border border-white
                            bg-white p-5
                            shadow-xl
                            shadow-zinc-900/5
                        "
                    >
                        <span
                            class="
                                text-xs font-extrabold
                                uppercase tracking-wider
                                text-lime-600
                            "
                        >
                            Fauna
                        </span>

                        <strong
                            class="
                                mt-2 block
                                text-lg font-black
                                text-zinc-950
                            "
                        >
                            Estudos e monitoramento
                        </strong>
                    </div>

                    {{-- Flora --}}
                    <div
                        class="
                            absolute
                            bottom-16 left-14
                            w-[220px]
                            rounded-2xl
                            border border-white
                            bg-white p-5
                            shadow-xl
                            shadow-zinc-900/5
                        "
                    >
                        <span
                            class="
                                text-xs font-extrabold
                                uppercase tracking-wider
                                text-lime-600
                            "
                        >
                            Flora
                        </span>

                        <strong
                            class="
                                mt-2 block
                                text-lg font-black
                                text-zinc-950
                            "
                        >
                            Inventários e caracterização
                        </strong>
                    </div>

                    {{-- Educação --}}
                    <div
                        class="
                            absolute
                            bottom-4 right-5
                            w-[220px]
                            rounded-2xl
                            bg-green-800 p-5
                            text-white
                            shadow-xl
                            shadow-green-950/10
                        "
                    >
                        <span
                            class="
                                text-xs font-extrabold
                                uppercase tracking-wider
                                text-lime-300
                            "
                        >
                            Educação
                        </span>

                        <strong
                            class="
                                mt-2 block
                                text-lg font-black
                            "
                        >
                            Educação Ambiental
                        </strong>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Serviços --}}
    <section class="bg-[#f7f8f4] py-20 lg:py-28">
        <div class="container-site">
            <div class="grid gap-8 lg:grid-cols-2">

                <article
                    id="licenciamento"
                    class="
                        rounded-3xl border border-zinc-200
                        bg-white p-8 shadow-sm
                    "
                >
                    <span class="section-eyebrow">
                        Licenciamento
                    </span>

                    <h2 class="mt-5 text-3xl font-black text-zinc-950">
                        Licenciamento Ambiental
                    </h2>

                    <p class="mt-5 text-base leading-8 text-zinc-600">
                        Assessoria técnica para obtenção, renovação e
                        regularização de licenças e autorizações ambientais,
                        acompanhando as etapas necessárias junto aos órgãos
                        competentes.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-zinc-600">
                        <li>• Análise de documentação</li>
                        <li>• Orientação sobre exigências ambientais</li>
                        <li>• Acompanhamento de processos</li>
                        <li>• Renovação e regularização de licenças</li>
                    </ul>
                </article>

                <article
                    id="fauna"
                    class="
                        rounded-3xl border border-zinc-200
                        bg-white p-8 shadow-sm
                    "
                >
                    <span class="section-eyebrow">
                        Fauna
                    </span>

                    <h2 class="mt-5 text-3xl font-black text-zinc-950">
                        Estudos de Fauna
                    </h2>

                    <p class="mt-5 text-base leading-8 text-zinc-600">
                        Levantamentos, inventários, resgates, monitoramentos
                        e manejo de fauna para estudos ambientais, obras,
                        licenciamentos e acompanhamento de empreendimentos.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-zinc-600">
                        <li>• Inventário e levantamento de fauna</li>
                        <li>• Monitoramento de espécies</li>
                        <li>• Resgate e manejo</li>
                        <li>• Relatórios técnicos</li>
                    </ul>
                </article>

                <article
                    id="flora"
                    class="
                        rounded-3xl border border-zinc-200
                        bg-white p-8 shadow-sm
                    "
                >
                    <span class="section-eyebrow">
                        Flora
                    </span>

                    <h2 class="mt-5 text-3xl font-black text-zinc-950">
                        Estudos de Flora
                    </h2>

                    <p class="mt-5 text-base leading-8 text-zinc-600">
                        Inventários florísticos, caracterização vegetal,
                        acompanhamento de supressão, compensação e recuperação
                        ambiental.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-zinc-600">
                        <li>• Inventário florístico</li>
                        <li>• Caracterização vegetal</li>
                        <li>• Acompanhamento de supressão</li>
                        <li>• Recuperação ambiental</li>
                    </ul>
                </article>

                <article
                    id="educacao"
                    class="
                        rounded-3xl border border-zinc-200
                        bg-white p-8 shadow-sm
                    "
                >
                    <span class="section-eyebrow">
                        Educação
                    </span>

                    <h2 class="mt-5 text-3xl font-black text-zinc-950">
                        Educação Ambiental
                    </h2>

                    <p class="mt-5 text-base leading-8 text-zinc-600">
                        Programas, treinamentos, palestras e ações de
                        conscientização voltados para empresas, escolas,
                        comunidades e equipes.
                    </p>

                    <ul class="mt-6 space-y-3 text-sm text-zinc-600">
                        <li>• Palestras e treinamentos</li>
                        <li>• Programas de conscientização</li>
                        <li>• Ações educativas</li>
                        <li>• Conteúdo técnico acessível</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    {{-- Como funciona --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="container-site">
            <div class="max-w-3xl">
                <span class="section-eyebrow">
                    Como trabalhamos
                </span>

                <h2 class="section-title mt-5">
                    Da análise inicial ao acompanhamento técnico
                </h2>
            </div>

            <div class="mt-12 grid gap-6 md:grid-cols-3">
                <div class="rounded-2xl bg-zinc-50 p-6">
                    <span class="text-4xl font-black text-lime-500">
                        01
                    </span>

                    <h3 class="mt-5 text-xl font-black text-zinc-950">
                        Entendimento da demanda
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-zinc-600">
                        Avaliação da necessidade, contexto do projeto,
                        documentação e exigências aplicáveis.
                    </p>
                </div>

                <div class="rounded-2xl bg-zinc-50 p-6">
                    <span class="text-4xl font-black text-lime-500">
                        02
                    </span>

                    <h3 class="mt-5 text-xl font-black text-zinc-950">
                        Planejamento técnico
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-zinc-600">
                        Definição das etapas, estudos, levantamentos e
                        estratégias necessárias.
                    </p>
                </div>

                <div class="rounded-2xl bg-zinc-50 p-6">
                    <span class="text-4xl font-black text-lime-500">
                        03
                    </span>

                    <h3 class="mt-5 text-xl font-black text-zinc-950">
                        Execução e acompanhamento
                    </h3>

                    <p class="mt-3 text-sm leading-6 text-zinc-600">
                        Desenvolvimento do trabalho com acompanhamento
                        técnico e comunicação ao longo do processo.
                    </p>
                </div>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-lime-300 py-16">
        <div
            class="
                container-site
                flex flex-col gap-8
                lg:flex-row lg:items-center
                lg:justify-between
            "
        >
            <div>
                <h2
                    class="
                        max-w-3xl text-3xl
                        font-black text-green-950
                        sm:text-4xl
                    "
                >
                    Precisa de orientação para uma demanda ambiental?
                </h2>

                <p class="mt-3 text-green-950/70">
                    Entre em contato e explique sua necessidade.
                </p>
            </div>

            <a
                href="https://wa.me/5515998546600"
                target="_blank"
                rel="noopener noreferrer"
                class="
                    inline-flex min-h-12 shrink-0
                    items-center justify-center
                    rounded-xl bg-green-950
                    px-6 py-3
                    text-sm font-extrabold
                    text-white transition
                    hover:-translate-y-1
                "
            >
                Falar pelo WhatsApp
            </a>
        </div>
    </section>

@endsection