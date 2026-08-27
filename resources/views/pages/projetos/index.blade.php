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
            {{-- Filtros --}}
            <div class="mb-12 flex flex-wrap items-center gap-3">
                <a
                    href="{{ route('projetos.index') }}"
                    @class([
                        'project-filter-button',
                        '!border-green-800 !bg-green-800 !text-white' => !$category,
                    ])
                >
                    Todos
                </a>

                @foreach ($categories as $categoryOption)
                    <a
                        href="{{ route('projetos.index', [
                            'category' => $categoryOption
                        ]) }}"
                        @class([
                            'project-filter-button',
                            '!border-green-800 !bg-green-800 !text-white'
                                => $category === $categoryOption,
                        ])
                    >
                        {{ $categoryOption }}
                    </a>
                @endforeach
            </div>

           {{-- Grid --}}
            <div class="grid gap-6 lg:grid-cols-2">
                @forelse ($projects as $project)
                    <x-project-card
                        :id="$project->slug"
                        :title="$project->title"
                        :description="$project->short_description"
                        :image="$project->cover_image"
                        :category="$project->category"
                        :location="$project->location"
                        :year="$project->year"
                        :url="route('projetos.show', $project->slug)"
                    />
                @empty
                    <div
                        class="
                            col-span-full
                            rounded-3xl
                            bg-zinc-50
                            px-6 py-16
                            text-center
                        "
                    >
                        <h2 class="text-xl font-black text-zinc-900">
                            Nenhum projeto disponível
                        </h2>

                        <p class="mt-2 text-sm text-zinc-500">
                            Novos projetos serão adicionados em breve.
                        </p>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

@endsection