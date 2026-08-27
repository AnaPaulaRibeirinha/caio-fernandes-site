@extends('layouts.site')

@section('title', 'Sobre | Caio Fernandes')

@section(
    'meta_description',
    'Conheça a trajetória profissional, a formação e as especialidades do biólogo e consultor ambiental Caio Fernandes.'
)

@section('content')

    {{-- Cabeçalho interno --}}
    <section
        class="
            relative overflow-hidden
            bg-[#f7f8f4]
            pb-20 pt-36
            lg:pb-28 lg:pt-44
        "
    >
        <div
            aria-hidden="true"
            class="
                absolute -right-24 -top-20
                h-80 w-80 rounded-full
                border-[45px] border-lime-200/50
            "
        ></div>

        <div class="container-site relative">
            <span class="section-eyebrow">
                Sobre
            </span>

            <h1
                class="
                    mt-5 max-w-4xl
                    text-5xl font-black
                    leading-[1.02]
                    tracking-[-0.055em]
                    text-zinc-950
                    sm:text-6xl
                    lg:text-7xl
                "
            >
                Ciência e experiência a serviço do meio ambiente
            </h1>

            <p
                class="
                    mt-7 max-w-2xl
                    text-lg leading-8
                    text-zinc-600
                "
            >
                Conheça a formação, a experiência e os valores que orientam
                cada projeto desenvolvido.
            </p>
        </div>
    </section>

    {{-- Conteúdo principal --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="container-site">
            <div
                class="
                    grid items-start gap-12
                    lg:grid-cols-[0.85fr_1.15fr]
                    lg:gap-20
                "
            >
                <div class="lg:sticky lg:top-28">
                    <div
                        class="
                            overflow-hidden
                            rounded-[2rem]
                            bg-zinc-200
                        "
                    >
                        <img
                            src="{{ asset('assets/images/about/caio-about.jpg') }}"
                            alt="Caio Fernandes"
                            class="
                                aspect-[4/5] h-full w-full
                                object-cover
                            "
                        >
                    </div>
                </div>

                <div>
                    <span class="section-eyebrow">
                        Trajetória
                    </span>

                    <h2 class="section-title mt-4">
                        Uma atuação construída com conhecimento, prática e
                        responsabilidade
                    </h2>

                    <div
                        class="
                            mt-8 space-y-6
                            text-base leading-8
                            text-zinc-600
                        "
                    >
                        <p>
                            Caio Fernandes atua na área ambiental auxiliando
                            empresas, propriedades e empreendimentos na tomada
                            de decisões técnicas e no atendimento às exigências
                            dos órgãos competentes.
                        </p>

                        <p>
                            Sua trajetória reúne experiência em licenciamento,
                            estudos de fauna e flora, elaboração de relatórios,
                            acompanhamento de campo e desenvolvimento de ações de
                            educação ambiental.
                        </p>

                        <p>
                            Cada trabalho é conduzido de forma personalizada,
                            considerando as características do projeto, os riscos
                            envolvidos e as melhores estratégias para alcançar
                            resultados seguros e sustentáveis.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3">
                        {{-- Formação 1 --}}
                        <div class="rounded-2xl bg-zinc-50 p-6">
                            <span
                                class="
                                    text-xs font-extrabold uppercase
                                    tracking-wider text-lime-700
                                "
                            >
                                Formação
                            </span>

                            <strong
                                class="
                                    mt-3 block text-xl
                                    font-extrabold text-zinc-900
                                "
                            >
                                Bacharel em Ciências Biológicas
                            </strong>

                            <p class="mt-3 text-sm leading-6 text-zinc-500">
                                UNG · 2002
                            </p>
                        </div>

                        {{-- Formação 2 --}}
                        <div class="rounded-2xl bg-zinc-50 p-6">
                            <span
                                class="
                                    text-xs font-extrabold uppercase
                                    tracking-wider text-lime-700
                                "
                            >
                                Formação
                            </span>

                            <strong
                                class="
                                    mt-3 block text-xl
                                    font-extrabold text-zinc-900
                                "
                            >
                                Especialização em Gestão Ambiental
                            </strong>

                            <p class="mt-3 text-sm leading-6 text-zinc-500">
                                IFPR · 2014
                            </p>
                        </div>

                        {{-- Jornalismo --}}
                        <div class="rounded-2xl bg-zinc-50 p-6">
                            <span
                                class="
                                    text-xs font-extrabold uppercase
                                    tracking-wider text-lime-700
                                "
                            >
                                Formação
                            </span>

                            <strong
                                class="
                                    mt-3 block text-xl
                                    font-extrabold text-zinc-900
                                "
                            >
                                Jornalista
                            </strong>

                            <p class="mt-3 text-sm leading-6 text-zinc-500">
                                Ministério do Trabalho · 2026
                            </p>
                        </div>

                        {{-- CRBio --}}
                        <div class="rounded-2xl bg-zinc-50 p-6">
                            <span
                                class="
                                    text-xs font-extrabold uppercase
                                    tracking-wider text-lime-700
                                "
                            >
                                Registro profissional
                            </span>

                            <strong
                                class="
                                    mt-3 block text-xl
                                    font-extrabold text-zinc-900
                                "
                            >
                                CRBio 39092/01-D
                            </strong>

                            <p class="mt-3 text-sm leading-6 text-zinc-500">
                                Registro profissional ativo.
                            </p>
                        </div>

                        {{-- DRT --}}
                        <div class="rounded-2xl bg-zinc-50 p-6">
                            <span
                                class="
                                    text-xs font-extrabold uppercase
                                    tracking-wider text-lime-700
                                "
                            >
                                Registro profissional
                            </span>

                            <strong
                                class="
                                    mt-3 block text-xl
                                    font-extrabold text-zinc-900
                                "
                            >
                                DRT 0102375/SP
                            </strong>

                            <p class="mt-3 text-sm leading-6 text-zinc-500">
                                Registro profissional de jornalista.
                            </p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a
                            href="{{ route('contato') }}"
                            class="button-primary"
                        >
                            Entrar em contato
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('pages.sobre.sections.book')

@endsection