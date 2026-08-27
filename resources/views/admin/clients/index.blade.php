@extends('layouts.admin')

@section('title', 'Clientes')
@section('page-title', 'Clientes')

@section('content')
    <div
        class="
            flex flex-col gap-5
            sm:flex-row sm:items-end sm:justify-between
        "
    >
        <div>
            <span
                class="
                    text-xs font-extrabold uppercase
                    tracking-[0.18em] text-green-700
                "
            >
                Conteúdo
            </span>

            <h1
                class="
                    mt-2 text-3xl font-black
                    tracking-[-0.04em] text-zinc-950
                    sm:text-4xl
                "
            >
                Clientes
            </h1>

            <p class="mt-2 text-sm leading-6 text-zinc-500">
                Gerencie os clientes exibidos no carrossel da Home.
            </p>
        </div>

        <a
            href="{{ route('admin.clients.create') }}"
            class="
                inline-flex min-h-12 items-center
                justify-center gap-2 rounded-xl
                bg-green-800 px-5 py-3
                text-sm font-extrabold text-white
                transition hover:-translate-y-0.5
                hover:bg-green-900
            "
        >
            + Novo cliente
        </a>
    </div>

    @if (session('success'))
        <div
            class="
                mt-6 rounded-xl
                border border-green-200
                bg-green-50 px-5 py-4
                text-sm font-semibold
                text-green-800
            "
        >
            {{ session('success') }}
        </div>
    @endif

    {{-- Filtros --}}
    <form
        method="GET"
        action="{{ route('admin.clients.index') }}"
        class="
            mt-8 grid gap-4
            rounded-2xl border border-zinc-200
            bg-white p-5 shadow-sm
            md:grid-cols-[1fr_220px_auto]
        "
    >
        <input
            type="search"
            name="search"
            value="{{ $search }}"
            placeholder="Buscar cliente..."
            class="
                w-full rounded-xl border border-zinc-300
                px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >

        <select
            name="status"
            class="
                rounded-xl border border-zinc-300
                bg-white px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >
            <option value="">
                Todos os status
            </option>

            <option value="active" @selected($status === 'active')>
                Ativos
            </option>

            <option value="inactive" @selected($status === 'inactive')>
                Inativos
            </option>
        </select>

        <button
            type="submit"
            class="
                rounded-xl bg-zinc-900
                px-5 py-3 text-sm
                font-extrabold text-white
            "
        >
            Filtrar
        </button>
    </form>

    {{-- Grid --}}
    <div
        class="
            mt-6 grid gap-5
            md:grid-cols-2
            xl:grid-cols-3
        "
    >
        @forelse ($clients as $client)
            <article
                class="
                    overflow-hidden rounded-2xl
                    border border-zinc-200
                    bg-white shadow-sm
                "
            >
                <div
                    class="
                        flex min-h-[180px]
                        items-center justify-center
                        bg-zinc-50 p-8
                    "
                >
                    @if ($client->logo)
                        <img
                            src="{{ asset($client->logo) }}"
                            alt="{{ $client->name }}"
                            class="
                                max-h-24
                                max-w-full
                                object-contain
                            "
                        >
                    @else
                        <span class="text-sm font-semibold text-zinc-400">
                            Sem logo
                        </span>
                    @endif
                </div>

                <div class="p-5">
                    <div
                        class="
                            flex items-start
                            justify-between gap-4
                        "
                    >
                        <div class="min-w-0">
                            <h2
                                class="
                                    truncate text-lg
                                    font-black text-zinc-950
                                "
                            >
                                {{ $client->name }}
                            </h2>

                            @if ($client->website)
                                <a
                                    href="{{ $client->website }}"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="
                                        mt-1 block truncate
                                        text-xs font-semibold
                                        text-green-700
                                    "
                                >
                                    {{ $client->website }}
                                </a>
                            @endif
                        </div>

                        <span
                            @class([
                                'shrink-0 rounded-full px-3 py-1 text-xs font-bold',
                                'bg-green-100 text-green-800' => $client->is_active,
                                'bg-zinc-100 text-zinc-500' => !$client->is_active,
                            ])
                        >
                            {{ $client->is_active ? 'Ativo' : 'Inativo' }}
                        </span>
                    </div>

                    <div class="mt-4 flex flex-wrap gap-2">
                        @if ($client->is_featured)
                            <span
                                class="
                                    rounded-full bg-lime-100
                                    px-3 py-1 text-xs
                                    font-bold text-green-800
                                "
                            >
                                Home
                            </span>
                        @endif

                        <span
                            class="
                                rounded-full bg-zinc-100
                                px-3 py-1 text-xs
                                font-bold text-zinc-500
                            "
                        >
                            Ordem {{ $client->sort_order }}
                        </span>
                    </div>

                    <div class="mt-5 flex items-center gap-3">
                        <a
                            href="{{ route('admin.clients.edit', $client) }}"
                            class="
                                rounded-lg border
                                border-zinc-300
                                px-4 py-2 text-xs
                                font-extrabold text-zinc-700
                                transition hover:bg-zinc-100
                            "
                        >
                            Editar
                        </a>

                        <form
                            method="POST"
                            action="{{ route('admin.clients.destroy', $client) }}"
                            onsubmit="return confirm('Deseja remover este cliente?')"
                        >
                            @csrf
                            @method('DELETE')

                            <button
                                type="submit"
                                class="
                                    rounded-lg border
                                    border-red-200
                                    bg-red-50 px-4 py-2
                                    text-xs font-extrabold
                                    text-red-700
                                    hover:bg-red-100
                                "
                            >
                                Excluir
                            </button>
                        </form>
                    </div>
                </div>
            </article>
        @empty
            <div
                class="
                    col-span-full
                    rounded-2xl border
                    border-zinc-200
                    bg-white p-12
                    text-center
                "
            >
                <h2 class="text-lg font-black text-zinc-900">
                    Nenhum cliente cadastrado
                </h2>

                <p class="mt-2 text-sm text-zinc-500">
                    Cadastre o primeiro cliente para começar.
                </p>
            </div>
        @endforelse
    </div>

    @if ($clients->hasPages())
        <div class="mt-10">
            {{ $clients->links() }}
        </div>
    @endif
@endsection