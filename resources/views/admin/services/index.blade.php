@extends('layouts.admin')

@section('title', 'Serviços')
@section('page-title', 'Serviços')

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
                Conteúdo
            </span>

            <h1
                class="
                    mt-2 text-3xl font-black
                    tracking-[-0.04em] text-zinc-950
                "
            >
                Serviços
            </h1>

            <p class="mt-2 text-sm text-zinc-500">
                Gerencie os serviços apresentados no site.
            </p>
        </div>

        <a
            href="{{ route('admin.services.create') }}"
            class="
                inline-flex min-h-12 items-center
                justify-center gap-2 rounded-xl
                bg-green-800 px-5 py-3
                text-sm font-extrabold text-white
                transition hover:bg-green-900
            "
        >
            <span class="text-lg leading-none">+</span>

            Novo serviço
        </a>
    </div>

    <form
        method="GET"
        action="{{ route('admin.services.index') }}"
        class="
            mt-8 grid gap-4 rounded-2xl
            border border-zinc-200 bg-white
            p-5 shadow-sm
            md:grid-cols-[1fr_220px_auto]
        "
    >
        <input
            type="search"
            name="search"
            value="{{ $search }}"
            placeholder="Buscar por título ou descrição..."
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
                transition focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >
            <option value="">Todos os status</option>

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
                min-h-12 rounded-xl bg-zinc-900
                px-6 text-sm font-extrabold text-white
                transition hover:bg-zinc-700
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
                            Serviço
                        </th>

                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Ordem
                        </th>

                        <th
                            class="
                                px-6 py-4 text-left text-xs
                                font-extrabold uppercase
                                tracking-wider text-zinc-500
                            "
                        >
                            Home
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
                    @forelse ($services as $service)
                        <tr class="transition hover:bg-zinc-50">
                            <td class="px-6 py-5">
                                <strong
                                    class="
                                        block text-sm font-extrabold
                                        text-zinc-950
                                    "
                                >
                                    {{ $service->title }}
                                </strong>

                                <span
                                    class="
                                        mt-1 block max-w-xl
                                        truncate text-xs text-zinc-500
                                    "
                                >
                                    {{ $service->short_description }}
                                </span>

                                <span
                                    class="
                                        mt-1 block text-[0.7rem]
                                        font-semibold text-zinc-400
                                    "
                                >
                                    /{{ $service->slug }}
                                </span>
                            </td>

                            <td
                                class="
                                    px-6 py-5 text-sm
                                    font-bold text-zinc-700
                                "
                            >
                                {{ $service->sort_order }}
                            </td>

                            <td class="px-6 py-5">
                                <span
                                    @class([
                                        'rounded-full px-3 py-1 text-xs font-bold',
                                        'bg-lime-100 text-green-800' => $service->is_featured,
                                        'bg-zinc-100 text-zinc-500' => !$service->is_featured,
                                    ])
                                >
                                    {{ $service->is_featured ? 'Destaque' : 'Não' }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <span
                                    @class([
                                        'rounded-full px-3 py-1 text-xs font-bold',
                                        'bg-green-100 text-green-800' => $service->is_active,
                                        'bg-red-100 text-red-700' => !$service->is_active,
                                    ])
                                >
                                    {{ $service->is_active ? 'Ativo' : 'Inativo' }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <div
                                    class="
                                        flex items-center
                                        justify-end gap-2
                                    "
                                >
                                    <a
                                        href="{{ route('admin.services.edit', $service) }}"
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
                                        action="{{ route('admin.services.destroy', $service) }}"
                                        onsubmit="return confirm('Deseja realmente excluir este serviço?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="
                                                rounded-lg border
                                                border-red-200 bg-red-50
                                                px-3 py-2 text-xs
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
                                Nenhum serviço encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($services->hasPages())
            <div class="border-t border-zinc-200 px-6 py-4">
                {{ $services->links() }}
            </div>
        @endif
    </div>
@endsection