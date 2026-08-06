@extends('layouts.site')

@section('title', 'Projetos | Caio Fernandes')

@section(
    'meta_description',
    'Conheça projetos e trabalhos desenvolvidos nas áreas de licenciamento ambiental, fauna, flora e educação ambiental.'
)

@section('content')

    {{-- Cabeçalho --}}
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

        <div
            aria-hidden="true"
            class="
                absolute -bottom-28 -left-28
                h-72 w-72 rounded-full
                bg-green-900/5
            "
        ></div>

        <div class="container-site relative">
            <span class="section-eyebrow">
                Portfólio
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
                Projetos que unem conhecimento técnico e responsabilidade
                ambiental
            </h1>

            <p
                class="
                    mt-7 max-w-2xl
                    text-lg leading-8
                    text-zinc-600
                "
            >
                Uma seleção de trabalhos realizados em diferentes áreas de
                atuação ambiental.
            </p>
        </div>
    </section>

    {{-- Projetos --}}
    <section class="bg-white py-20 lg:py-28">
        <div class="container-site">
            {{-- Filtros visuais --}}
            <div
                class="
                    mb-12 flex flex-wrap
                    items-center gap-3
                "
            >
                <button
                    type="button"
                    class="
                        rounded-full bg-green-800
                        px-5 py-3 text-sm
                        font-extrabold text-white
                    "
                >
                    Todos
                </button>

                <button
                    type="button"
                    class="project-filter-button"
                >
                    Licenciamento
                </button>

                <button
                    type="button"
                    class="project-filter-button"
                >
                    Fauna
                </button>

                <button
                    type="button"
                    class="project-filter-button"
                >
                    Flora
                </button>

                <button
                    type="button"
                    class="project-filter-button"
                >
                    Educação ambiental
                </button>
            </div>

            {{-- Grid --}}
            <div class="grid gap-6 lg:grid-cols-2">
                <x-project-card
                    id="monitoramento-fauna"
                    title="Monitoramento e manejo de fauna silvestre"
                    description="Levantamento de espécies, acompanhamento de campo e definição de medidas para redução de impactos."
                    image="assets/images/projects/projeto-fauna.jpg"
                    category="Fauna"
                    location="Sorocaba, SP"
                    year="2026"
                />

                <x-project-card
                    id="inventario-flora"
                    title="Inventário e caracterização de vegetação"
                    description="Identificação de espécies, avaliação ambiental e produção de informações técnicas para o projeto."
                    image="assets/images/projects/projeto-flora.jpg"
                    category="Flora"
                    location="Itu, SP"
                    year="2025"
                />

                <x-project-card
                    id="educacao-ambiental"
                    title="Programa de educação ambiental"
                    description="Capacitação de colaboradores e atividades de conscientização com comunidades do entorno."
                    image="assets/images/projects/projeto-educacao.jpg"
                    category="Educação ambiental"
                    location="Campinas, SP"
                    year="2025"
                />

                <x-project-card
                    title="Acompanhamento de licenciamento ambiental"
                    description="Suporte técnico na organização documental, atendimento de exigências e acompanhamento do processo."
                    image="assets/images/projects/projeto-licenciamento.jpg"
                    category="Licenciamento"
                    location="São Paulo, SP"
                    year="2025"
                />
            </div>
        </div>
    </section>

@endsection