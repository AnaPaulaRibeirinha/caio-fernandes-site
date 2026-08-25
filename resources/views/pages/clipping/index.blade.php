@extends('layouts.site')

@section('title', 'Clipping | Caio Fernandes')

@section(
    'meta_description',
    'Confira matérias, entrevistas, vídeos e participações na imprensa de Caio Fernandes.'
)

@section('content')
    <section class="relative overflow-hidden bg-green-950 pb-20 pt-36 text-white lg:pb-28">
        <div
            aria-hidden="true"
            class="
                pointer-events-none absolute -right-24 top-20
                h-80 w-80 rounded-full
                border-[45px] border-lime-300/10
            "
        ></div>

        <div class="container-site relative">
            <span
                class="
                    inline-flex items-center gap-2
                    text-xs font-extrabold uppercase
                    tracking-[0.18em] text-lime-300
                "
            >
                <span class="h-2 w-2 rounded-full bg-lime-300"></span>
                Na mídia
            </span>

            <h1
                class="
                    mt-5 max-w-4xl
                    text-5xl font-black leading-[0.98]
                    tracking-[-0.055em]
                    sm:text-6xl lg:text-7xl
                "
            >
                Clipping e participações na imprensa
            </h1>

            <p
                class="
                    mt-7 max-w-2xl
                    text-base leading-8 text-white/65
                    sm:text-lg
                "
            >
                Matérias, entrevistas, vídeos e conteúdos que registram
                participações, projetos e contribuições relacionadas ao
                meio ambiente, biodiversidade e educação ambiental.
            </p>
        </div>
    </section>

    <section class="bg-[#f7f8f4] py-16 lg:py-20">
        <div class="container-site">

            {{-- Filtros --}}
            <div
                class="
                    flex flex-wrap items-center
                    gap-3
                "
            >
                @php
                    $filters = [
                        '' => 'Todos',
                        'article' => 'Matérias',
                        'video' => 'Vídeos',
                        'interview' => 'Entrevistas',
                        'social' => 'Redes sociais',
                    ];
                @endphp

                @foreach ($filters as $value => $label)
                    <a
                        href="{{ route('clipping.index', $value ? ['type' => $value] : []) }}"
                        @class([
                            'project-filter-button',
                            '!border-green-800 !bg-green-800 !text-white'
                                => $type === $value
                                    || (!$type && $value === ''),
                        ])
                    >
                        {{ $label }}
                    </a>
                @endforeach
            </div>

            {{-- Grid --}}
            <div
                class="
                    mt-10 grid gap-6
                    md:grid-cols-2
                    xl:grid-cols-3
                "
            >
                @forelse ($clippings as $clipping)
                    @if ($clipping->external_url)
                        <a
                            href="{{ $clipping->external_url }}"
                            target="_blank"
                            rel="noopener noreferrer"
                            class="
                                group block h-full
                                rounded-2xl
                                focus:outline-none
                                focus:ring-4
                                focus:ring-lime-300/40
                            "
                            aria-label="Acessar {{ $clipping->title }}"
                        >
                    @else
                        <div class="group block h-full">
                    @endif

                        <article
                            class="
                                flex h-full flex-col
                                overflow-hidden rounded-2xl
                                border border-zinc-200
                                bg-white shadow-sm
                                transition duration-300

                                group-hover:-translate-y-1
                                group-hover:border-lime-300
                                group-hover:shadow-xl

                                group-focus-visible:-translate-y-1
                                group-focus-visible:border-lime-300
                            "
                        >
                            {{-- Imagem --}}
                            <div
                                class="
                                    relative aspect-[16/10]
                                    overflow-hidden bg-zinc-100
                                "
                            >
                                @if ($clipping->image)
                                    <img
                                        src="{{ asset($clipping->image) }}"
                                        alt="{{ $clipping->title }}"
                                        class="
                                            h-full w-full object-cover
                                            transition duration-500
                                            group-hover:scale-105
                                        "
                                    >
                                @else
                                    <div
                                        class="
                                            flex h-full w-full
                                            items-center justify-center
                                            bg-green-950
                                        "
                                    >
                                        <div class="text-center">
                                            <span
                                                class="
                                                    block text-5xl font-black
                                                    tracking-[-0.08em]
                                                    text-lime-300/30
                                                "
                                            >
                                                CF
                                            </span>

                                            <span
                                                class="
                                                    mt-2 block text-[0.65rem]
                                                    font-extrabold uppercase
                                                    tracking-[0.15em]
                                                    text-white/35
                                                "
                                            >
                                                Clipping
                                            </span>
                                        </div>
                                    </div>
                                @endif

                                {{-- Tipo --}}
                                <div
                                    class="
                                        absolute left-4 top-4
                                        rounded-full
                                        bg-white/95 px-3 py-1.5
                                        text-xs font-extrabold
                                        text-green-800
                                        shadow-sm backdrop-blur
                                    "
                                >
                                    @switch($clipping->type)
                                        @case('video')
                                            Vídeo
                                            @break

                                        @case('interview')
                                            Entrevista
                                            @break

                                        @case('social')
                                            Redes sociais
                                            @break

                                        @default
                                            Matéria
                                    @endswitch
                                </div>

                                {{-- Indicador de link --}}
                                @if ($clipping->external_url)
                                    <div
                                        class="
                                            absolute bottom-4 right-4
                                            flex h-10 w-10 items-center justify-center
                                            rounded-full bg-green-950
                                            text-white shadow-lg
                                            transition duration-300
                                            group-hover:bg-lime-300
                                            group-hover:text-green-950
                                        "
                                    >
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
                                                d="M14 3h7v7M10 14 21 3M21 14v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6"
                                            />
                                        </svg>
                                    </div>
                                @endif
                            </div>

                            {{-- Conteúdo --}}
                            <div class="flex flex-1 flex-col p-6">
                                <div
                                    class="
                                        flex flex-wrap items-center
                                        gap-x-3 gap-y-1
                                        text-xs font-semibold
                                        text-zinc-500
                                    "
                                >
                                    <span>
                                        {{ $clipping->source ?: 'Publicação' }}
                                    </span>

                                    @if ($clipping->published_at)
                                        <span aria-hidden="true">
                                            •
                                        </span>

                                        <time
                                            datetime="{{ $clipping->published_at->format('Y-m-d') }}"
                                        >
                                            {{ $clipping->published_at->format('d/m/Y') }}
                                        </time>
                                    @endif
                                </div>

                                <h2
                                    class="
                                        mt-4 text-xl font-black
                                        leading-tight text-zinc-950
                                        transition
                                        group-hover:text-green-800
                                    "
                                >
                                    {{ $clipping->title }}
                                </h2>

                                <p
                                    class="
                                        mt-4 line-clamp-3
                                        text-sm leading-6
                                        text-zinc-600
                                    "
                                >
                                    {{ $clipping->excerpt }}
                                </p>

                                <div class="mt-auto pt-6">
                                    @if ($clipping->external_url)
                                        <span
                                            class="
                                                inline-flex items-center gap-2
                                                text-sm font-extrabold
                                                text-green-800
                                                transition
                                                group-hover:text-lime-600
                                            "
                                        >
                                            Acessar conteúdo

                                            <svg
                                                class="
                                                    h-4 w-4
                                                    transition-transform
                                                    group-hover:translate-x-1
                                                "
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
                                        </span>
                                    @else
                                        <span
                                            class="
                                                text-xs font-semibold
                                                text-zinc-400
                                            "
                                        >
                                            Conteúdo indisponível
                                        </span>
                                    @endif
                                </div>
                            </div>
                        </article>

                    @if ($clipping->external_url)
                        </a>
                    @else
                        </div>
                    @endif
                @empty
                    <div
                        class="
                            col-span-full rounded-2xl
                            border border-zinc-200
                            bg-white p-12
                            text-center
                        "
                    >
                        <h2 class="text-xl font-extrabold text-zinc-900">
                            Nenhuma publicação encontrada
                        </h2>

                        <p class="mt-2 text-sm text-zinc-500">
                            Não existem conteúdos publicados nesta categoria.
                        </p>
                    </div>
                @endforelse
            </div>

            @if ($clippings->hasPages())
                <div class="mt-12">
                    {{ $clippings->links() }}
                </div>
            @endif
        </div>
    </section>
@endsection