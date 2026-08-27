@extends('layouts.admin')

@section('title', 'Dashboard')
@section('page-title', 'Dashboard')

@section('content')
    <div
        class="
            flex flex-col gap-5
            sm:flex-row sm:items-end
            sm:justify-between
        "
    >
        <div>
            <span
                class="
                    text-xs font-extrabold uppercase
                    tracking-[0.18em] text-green-700
                "
            >
                Visão geral
            </span>

            <h1
                class="
                    mt-2 text-3xl font-black
                    tracking-[-0.04em] text-zinc-950
                    sm:text-4xl
                "
            >
                Olá, {{ auth()->user()->name }}!
            </h1>

            <p class="mt-2 text-sm leading-6 text-zinc-500">
                Acompanhe e gerencie o conteúdo publicado no site.
            </p>
        </div>

        <a
            href="{{ route('home') }}"
            target="_blank"
            rel="noopener noreferrer"
            class="
                inline-flex min-h-12 items-center
                justify-center gap-2 rounded-xl
                bg-green-800 px-5 py-3
                text-sm font-extrabold text-white
                transition hover:-translate-y-0.5
                hover:bg-green-900
            "
        >
            Visualizar site

            <svg
                class="h-4 w-4"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path d="M14 3h7v7"></path>
                <path d="M10 14 21 3"></path>
                <path d="M21 14v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6"></path>
            </svg>
        </a>
    </div>

    <div
        class="
            mt-8 grid gap-5
            sm:grid-cols-2
            xl:grid-cols-5
        "
    >
        @php
            $cards = [
                [
                    'label' => 'Serviços',
                    'value' => $totals['services'],
                    'description' => 'Serviços cadastrados',
                ],
                [
                    'label' => 'Projetos',
                    'value' => $totals['projects'],
                    'description' => 'Projetos cadastrados',
                ],
                [
                    'label' => 'Clientes',
                    'value' => $totals['clients'],
                    'description' => 'Clientes cadastrados',
                ],
                [
                    'label' => 'Clipping',
                    'value' => $totals['clippings'],
                    'description' => 'Publicações cadastradas',
                ],
                [
                    'label' => 'Indicadores',
                    'value' => $totals['statistics'],
                    'description' => 'Indicadores cadastrados',
                ],
            ];
        @endphp

        @foreach ($cards as $card)
            <article
                class="
                    relative overflow-hidden
                    rounded-2xl border border-zinc-200
                    bg-white p-6 shadow-sm
                "
            >
                <div
                    class="
                        absolute -right-8 -top-8
                        h-24 w-24 rounded-full
                        bg-lime-100
                    "
                ></div>

                <div class="relative">
                    <span
                        class="
                            text-xs font-extrabold uppercase
                            tracking-wider text-zinc-400
                        "
                    >
                        {{ $card['label'] }}
                    </span>

                    <strong
                        class="
                            mt-4 block text-4xl font-black
                            tracking-[-0.05em] text-zinc-950
                        "
                    >
                        {{ $card['value'] }}
                    </strong>

                    <p class="mt-2 text-sm text-zinc-500">
                        {{ $card['description'] }}
                    </p>
                </div>
            </article>
        @endforeach
    </div>

    <div class="mt-8 grid gap-6 xl:grid-cols-2">
        <section
            class="
                overflow-hidden rounded-2xl
                border border-zinc-200 bg-white
                shadow-sm
            "
        >
            <div
                class="
                    flex items-center justify-between
                    border-b border-zinc-100 px-6 py-5
                "
            >
                <div>
                    <h2 class="text-lg font-extrabold text-zinc-950">
                        Projetos recentes
                    </h2>

                    <p class="mt-1 text-sm text-zinc-500">
                        Últimos projetos cadastrados.
                    </p>
                </div>
            </div>

            <div class="divide-y divide-zinc-100">
                @forelse ($recentProjects as $project)
                    <div
                        class="
                            flex items-center justify-between
                            gap-4 px-6 py-4
                        "
                    >
                        <div class="min-w-0">
                            <strong
                                class="
                                    block truncate text-sm
                                    font-bold text-zinc-900
                                "
                            >
                                {{ $project->title }}
                            </strong>

                            <span class="mt-1 block text-xs text-zinc-500">
                                {{ $project->category }}

                                @if ($project->year)
                                    · {{ $project->year }}
                                @endif
                            </span>
                        </div>

                        <span
                            @class([
                                'shrink-0 rounded-full px-3 py-1 text-xs font-bold',
                                'bg-green-100 text-green-800' => $project->is_active,
                                'bg-zinc-100 text-zinc-500' => !$project->is_active,
                            ])
                        >
                            {{ $project->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </div>
                @empty
                    <p class="px-6 py-10 text-center text-sm text-zinc-500">
                        Nenhum projeto cadastrado.
                    </p>
                @endforelse
            </div>
        </section>

        <section
            class="
                overflow-hidden rounded-2xl
                border border-zinc-200 bg-white
                shadow-sm
            "
        >
            <div
                class="
                    flex items-center justify-between
                    border-b border-zinc-100 px-6 py-5
                "
            >
                <div>
                    <h2 class="text-lg font-extrabold text-zinc-950">
                        Publicações recentes
                    </h2>

                    <p class="mt-1 text-sm text-zinc-500">
                        Últimas notícias adicionadas ao clipping.
                    </p>
                </div>
            </div>

            <div class="divide-y divide-zinc-100">
                @forelse ($recentClippings as $clipping)
                    <div
                        class="
                            flex items-center justify-between
                            gap-4 px-6 py-4
                        "
                    >
                        <div class="min-w-0">
                            <strong
                                class="
                                    block truncate text-sm
                                    font-bold text-zinc-900
                                "
                            >
                                {{ $clipping->title }}
                            </strong>

                            <span class="mt-1 block text-xs text-zinc-500">
                                {{ $clipping->source ?? 'Fonte não informada' }}

                                @if ($clipping->published_at)
                                    · {{ $clipping->published_at->format('d/m/Y') }}
                                @endif
                            </span>
                        </div>

                        <span
                            @class([
                                'shrink-0 rounded-full px-3 py-1 text-xs font-bold',
                                'bg-green-100 text-green-800' => $clipping->is_active,
                                'bg-zinc-100 text-zinc-500' => !$clipping->is_active,
                            ])
                        >
                            {{ $clipping->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </div>
                @empty
                    <p class="px-6 py-10 text-center text-sm text-zinc-500">
                        Nenhuma publicação cadastrada.
                    </p>
                @endforelse
            </div>
        </section>
    </div>
@endsection