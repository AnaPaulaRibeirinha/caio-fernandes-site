@extends('layouts.admin')

@section('title', 'Clipping')
@section('page-title', 'Clipping')

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
                Notícias e publicações
            </span>

            <h1
                class="
                    mt-2 text-3xl font-black
                    tracking-[-0.04em] text-zinc-950
                "
            >
                Clipping
            </h1>

            <p class="mt-2 text-sm text-zinc-500">
                Gerencie notícias, entrevistas e publicações do site.
            </p>
        </div>

        <a
            href="{{ route('admin.clippings.create') }}"
            class="
                inline-flex min-h-12 items-center
                justify-center gap-2 rounded-xl
                bg-green-800 px-5 py-3
                text-sm font-extrabold text-white
                transition hover:bg-green-900
            "
        >
            <span class="text-lg leading-none">+</span>

            Nova publicação
        </a>
    </div>

    <form
        method="GET"
        action="{{ route('admin.clippings.index') }}"
        class="
            mt-8 grid gap-4 rounded-2xl
            border border-zinc-200 bg-white p-5
            shadow-sm
            md:grid-cols-[1fr_200px_200px_auto]
        "
    >
        <input
            type="search"
            name="search"
            value="{{ $search }}"
            placeholder="Buscar por título, fonte ou resumo..."
            class="
                w-full rounded-xl border border-zinc-300
                px-4 py-3 text-sm outline-none
                transition focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >

        <select
            name="status"
            class="
                w-full rounded-xl border border-zinc-300
                bg-white px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >
            <option value="">Todos os status</option>

            <option value="active" @selected($status === 'active')>
                Ativas
            </option>

            <option value="inactive" @selected($status === 'inactive')>
                Inativas
            </option>
        </select>

        <select
            name="featured"
            class="
                w-full rounded-xl border border-zinc-300
                bg-white px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >
            <option value="">Todos os destaques</option>

            <option value="yes" @selected($featured === 'yes')>
                Em destaque
            </option>

            <option value="no" @selected($featured === 'no')>
                Sem destaque
            </option>
        </select>

        <button
            type="submit"
            class="
                min-h-12 rounded-xl bg-zinc-900
                px-6 text-sm font-extrabold
                text-white transition hover:bg-zinc-700
            "
        >
            Filtrar
        </button>
    </form>

    <div
        class="
            mt-6 overflow-hidden rounded-2xl
            border border-zinc-200 bg-white shadow-sm
        "
    >
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-zinc-200">
                <thead class="bg-zinc-50">
                    <tr>
                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Publicação
                        </th>

                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Fonte
                        </th>

                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Data
                        </th>

                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Status
                        </th>

                        <th
                            class="
                                px-6 py-4 text-right text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Ações
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-zinc-100">
                    @forelse ($clippings as $clipping)
                        <tr class="transition hover:bg-zinc-50">
                            <td class="px-6 py-5">
                                <div class="flex min-w-[360px] items-center gap-4">
                                    <div
                                        class="
                                            h-16 w-24 shrink-0 overflow-hidden
                                            rounded-xl bg-zinc-100
                                        "
                                    >
                                        @if ($clipping->image)
                                            <img
                                                src="{{ asset($clipping->image) }}"
                                                alt="{{ $clipping->title }}"
                                                class="h-full w-full object-cover"
                                            >
                                        @else
                                            <div
                                                class="
                                                    flex h-full w-full
                                                    items-center justify-center
                                                    bg-green-50 text-xs
                                                    font-bold text-green-700
                                                "
                                            >
                                                Sem foto
                                            </div>
                                        @endif
                                    </div>

                                    <div class="min-w-0">
                                        <strong
                                            class="
                                                block max-w-xl truncate
                                                text-sm font-extrabold
                                                text-zinc-950
                                            "
                                        >
                                            {{ $clipping->title }}
                                        </strong>

                                        <span
                                            class="
                                                mt-1 block max-w-xl
                                                truncate text-xs text-zinc-500
                                            "
                                        >
                                            {{ $clipping->excerpt }}
                                        </span>

                                        <div class="mt-2 flex flex-wrap gap-2">
                                            @if ($clipping->is_featured)
                                                <span
                                                    class="
                                                        inline-flex rounded-full
                                                        bg-lime-100 px-2.5 py-1
                                                        text-[0.65rem] font-bold
                                                        text-green-800
                                                    "
                                                >
                                                    Destaque
                                                </span>
                                            @endif

                                            @if ($clipping->external_url)
                                                <span
                                                    class="
                                                        inline-flex rounded-full
                                                        bg-blue-50 px-2.5 py-1
                                                        text-[0.65rem] font-bold
                                                        text-blue-700
                                                    "
                                                >
                                                    Link externo
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </td>

                            <td
                                class="
                                    px-6 py-5 text-sm
                                    font-semibold text-zinc-700
                                "
                            >
                                {{ $clipping->source ?: 'Não informada' }}
                            </td>

                            <td
                                class="
                                    px-6 py-5 text-sm
                                    font-semibold text-zinc-700
                                "
                            >
                                {{ $clipping->published_at
                                    ? $clipping->published_at->format('d/m/Y')
                                    : '—' }}
                            </td>

                            <td class="px-6 py-5">
                                <span
                                    @class([
                                        'rounded-full px-3 py-1 text-xs font-bold',
                                        'bg-green-100 text-green-800' => $clipping->is_active,
                                        'bg-red-100 text-red-700' => !$clipping->is_active,
                                    ])
                                >
                                    {{ $clipping->is_active ? 'Ativa' : 'Inativa' }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <div class="flex justify-end gap-2">
                                    @if ($clipping->external_url)
                                        <a
                                            href="{{ $clipping->external_url }}"
                                            target="_blank"
                                            rel="noopener noreferrer"
                                            class="
                                                rounded-lg border border-blue-200
                                                bg-blue-50 px-3 py-2 text-xs
                                                font-extrabold text-blue-700
                                                transition hover:bg-blue-100
                                            "
                                        >
                                            Abrir
                                        </a>
                                    @endif

                                    <a
                                        href="{{ route(
                                            'admin.clippings.edit',
                                            $clipping
                                        ) }}"
                                        class="
                                            rounded-lg border border-zinc-300
                                            bg-white px-3 py-2 text-xs
                                            font-extrabold text-zinc-700
                                            transition hover:bg-zinc-100
                                        "
                                    >
                                        Editar
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route(
                                            'admin.clippings.destroy',
                                            $clipping
                                        ) }}"
                                        onsubmit="return confirm('Deseja realmente excluir esta publicação?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="
                                                rounded-lg border border-red-200
                                                bg-red-50 px-3 py-2 text-xs
                                                font-extrabold text-red-700
                                                transition hover:bg-red-100
                                            "
                                        >
                                            Excluir
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td
                                colspan="5"
                                class="
                                    px-6 py-16 text-center
                                    text-sm text-zinc-500
                                "
                            >
                                Nenhuma publicação encontrada.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($clippings->hasPages())
            <div class="border-t border-zinc-200 px-6 py-4">
                {{ $clippings->links() }}
            </div>
        @endif
    </div>
@endsection