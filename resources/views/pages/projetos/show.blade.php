@extends('layouts.site')

@section('title', $project->title . ' | Caio Fernandes')

@section(
    'meta_description',
    $project->short_description
)

@section('content')

    {{-- Hero --}}
    <section
        class="
            relative overflow-hidden
            bg-[#f7f8f4]
            pb-16 pt-36
            lg:pb-20 lg:pt-44
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
            <a
                href="{{ route('projetos.index') }}"
                class="
                    inline-flex items-center gap-2
                    text-sm font-extrabold
                    text-green-800
                    transition hover:text-lime-600
                "
            >
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
                        d="M19 12H5m6-6-6 6 6 6"
                    />
                </svg>

                Voltar aos projetos
            </a>

            <div class="mt-10 max-w-4xl">
                <span class="section-eyebrow">
                    {{ $project->category }}
                </span>

                <h1
                    class="
                        mt-5 text-5xl font-black
                        leading-[1.02]
                        tracking-[-0.055em]
                        text-zinc-950
                        sm:text-6xl
                        lg:text-7xl
                    "
                >
                    {{ $project->title }}
                </h1>

                <div
                    class="
                        mt-7 flex flex-wrap
                        items-center gap-5
                        text-sm font-bold
                        text-zinc-500
                    "
                >
                    @if ($project->location)
                        <span>
                            {{ $project->location }}
                        </span>
                    @endif

                    @if ($project->year)
                        <span>
                            {{ $project->year }}
                        </span>
                    @endif
                </div>
            </div>
        </div>
    </section>

    {{-- Imagem --}}
    @if ($project->cover_image)
        <section class="bg-white pt-12">
            <div class="container-site">
                <div
                    class="
                        overflow-hidden rounded-[2rem]
                        bg-zinc-100
                    "
                >
                    <img
                        src="{{ asset($project->cover_image) }}"
                        alt="{{ $project->title }}"
                        class="
                            max-h-[680px]
                            w-full object-cover
                        "
                    >
                </div>
            </div>
        </section>
    @endif

    {{-- Conteúdo --}}
    <section class="bg-white py-16 lg:py-24">
        <div
            class="
                container-site
                grid gap-12
                lg:grid-cols-[1fr_300px]
            "
        >
            <div class="max-w-3xl">
                <span class="section-eyebrow">
                    Sobre o projeto
                </span>

                <p
                    class="
                        mt-6 text-xl
                        leading-9 text-zinc-600
                    "
                >
                    {{ $project->short_description }}
                </p>

                @if ($project->description)
                    <div
                        class="
                            mt-8 whitespace-pre-line
                            text-base leading-8
                            text-zinc-600
                        "
                    >
                        {{ $project->description }}
                    </div>
                @endif
            </div>

            <aside>
                <div
                    class="
                        rounded-2xl
                        bg-[#f7f8f4]
                        p-6
                    "
                >
                    <span
                        class="
                            text-xs font-extrabold
                            uppercase tracking-[0.16em]
                            text-lime-600
                        "
                    >
                        Informações
                    </span>

                    <dl class="mt-6 space-y-5">
                        <div>
                            <dt
                                class="
                                    text-xs font-bold
                                    uppercase tracking-wider
                                    text-zinc-400
                                "
                            >
                                Área
                            </dt>

                            <dd
                                class="
                                    mt-1 font-extrabold
                                    text-zinc-900
                                "
                            >
                                {{ $project->category }}
                            </dd>
                        </div>

                        @if ($project->location)
                            <div>
                                <dt
                                    class="
                                        text-xs font-bold
                                        uppercase tracking-wider
                                        text-zinc-400
                                    "
                                >
                                    Localização
                                </dt>

                                <dd
                                    class="
                                        mt-1 font-extrabold
                                        text-zinc-900
                                    "
                                >
                                    {{ $project->location }}
                                </dd>
                            </div>
                        @endif

                        @if ($project->year)
                            <div>
                                <dt
                                    class="
                                        text-xs font-bold
                                        uppercase tracking-wider
                                        text-zinc-400
                                    "
                                >
                                    Ano
                                </dt>

                                <dd
                                    class="
                                        mt-1 font-extrabold
                                        text-zinc-900
                                    "
                                >
                                    {{ $project->year }}
                                </dd>
                            </div>
                        @endif
                    </dl>
                </div>
            </aside>
        </div>
    </section>

    {{-- CTA --}}
    <section class="bg-lime-300 py-16">
        <div
            class="
                container-site
                flex flex-col gap-7
                lg:flex-row lg:items-center
                lg:justify-between
            "
        >
            <div>
                <h2
                    class="
                        text-3xl font-black
                        text-green-950
                        sm:text-4xl
                    "
                >
                    Tem um projeto semelhante?
                </h2>

                <p class="mt-3 text-green-950/70">
                    Entre em contato para conversar sobre sua necessidade.
                </p>
            </div>

            <a
                href="{{ route('contato') }}"
                class="
                    inline-flex min-h-12
                    items-center justify-center
                    rounded-xl bg-green-950
                    px-6 py-3
                    text-sm font-extrabold
                    text-white transition
                    hover:-translate-y-1
                "
            >
                Entrar em contato
            </a>
        </div>
    </section>

@endsection