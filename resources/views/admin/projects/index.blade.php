@extends('layouts.admin')

@section('title', 'Projetos')
@section('page-title', 'Projetos')

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
                Portfólio
            </span>

            <h1
                class="
                    mt-2 text-3xl font-black
                    tracking-[-0.04em] text-zinc-950
                "
            >
                Projetos
            </h1>

            <p class="mt-2 text-sm text-zinc-500">
                Gerencie os projetos apresentados no site.
            </p>
        </div>

        <a
            href="{{ route('admin.projects.create') }}"
            class="
                inline-flex min-h-12 items-center
                justify-center gap-2 rounded-xl
                bg-green-800 px-5 py-3
                text-sm font-extrabold text-white
                transition hover:bg-green-900
            "
        >
            <span class="text-lg leading-none">+</span>
            Novo projeto
        </a>
    </div>

    <form
        method="GET"
        action="{{ route('admin.projects.index') }}"
        class="
            mt-8 grid gap-4 rounded-2xl
            border border-zinc-200 bg-white p-5
            shadow-sm
            md:grid-cols-[1fr_220px_200px_auto]
        "
    >
        <input
            type="search"
            name="search"
            value="{{ $search }}"
            placeholder="Buscar projeto..."
            class="
                w-full rounded-xl border border-zinc-300
                px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >

        <select
            name="category"
            class="
                w-full rounded-xl border border-zinc-300
                bg-white px-4 py-3 text-sm outline-none
                focus:border-green-700
                focus:ring-4 focus:ring-green-100
            "
        >
            <option value="">Todas as categorias</option>

            @foreach ($categories as $categoryOption)
                <option
                    value="{{ $categoryOption }}"
                    @selected($category === $categoryOption)
                >
                    {{ $categoryOption }}
                </option>
            @endforeach
        </select>

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
                px-6 text-sm font-extrabold
                text-white hover:bg-zinc-700
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
                        <th class="px-6 py-4 text-left text-xs font-extrabold uppercase tracking-wider text-zinc-500">
                            Projeto
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-extrabold uppercase tracking-wider text-zinc-500">
                            Categoria
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-extrabold uppercase tracking-wider text-zinc-500">
                            Ano
                        </th>

                        <th class="px-6 py-4 text-left text-xs font-extrabold uppercase tracking-wider text-zinc-500">
                            Status
                        </th>

                        <th class="px-6 py-4 text-right text-xs font-extrabold uppercase tracking-wider text-zinc-500">
                            Ações
                        </th>
                    </tr>
                </thead>

                <tbody class="divide-y divide-zinc-100">
                    @forelse ($projects as $project)
                        <tr class="transition hover:bg-zinc-50">
                            <td class="px-6 py-5">
                                <div class="flex min-w-[320px] items-center gap-4">
                                    <div
                                        class="
                                            h-16 w-20 shrink-0 overflow-hidden
                                            rounded-xl bg-zinc-100
                                        "
                                    >
                                        @if ($project->cover_image)
                                            <img
                                                src="{{ asset($project->cover_image) }}"
                                                alt="{{ $project->title }}"
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
                                                block truncate text-sm
                                                font-extrabold text-zinc-950
                                            "
                                        >
                                            {{ $project->title }}
                                        </strong>

                                        <span class="mt-1 block text-xs text-zinc-500">
                                            {{ $project->location ?: 'Local não informado' }}
                                        </span>

                                        @if ($project->is_featured)
                                            <span
                                                class="
                                                    mt-2 inline-flex rounded-full
                                                    bg-lime-100 px-2.5 py-1
                                                    text-[0.65rem] font-bold
                                                    text-green-800
                                                "
                                            >
                                                Destaque
                                            </span>
                                        @endif
                                    </div>
                                </div>
                            </td>

                            <td class="px-6 py-5 text-sm font-semibold text-zinc-700">
                                {{ $project->category }}
                            </td>

                            <td class="px-6 py-5 text-sm font-semibold text-zinc-700">
                                {{ $project->year ?: '—' }}
                            </td>

                            <td class="px-6 py-5">
                                <span
                                    @class([
                                        'rounded-full px-3 py-1 text-xs font-bold',
                                        'bg-green-100 text-green-800' => $project->is_active,
                                        'bg-red-100 text-red-700' => !$project->is_active,
                                    ])
                                >
                                    {{ $project->is_active ? 'Ativo' : 'Inativo' }}
                                </span>
                            </td>

                            <td class="px-6 py-5">
                                <div class="flex justify-end gap-2">
                                    <a
                                        href="{{ route('admin.projects.edit', $project) }}"
                                        class="
                                            rounded-lg border border-zinc-300
                                            bg-white px-3 py-2 text-xs
                                            font-extrabold text-zinc-700
                                            hover:bg-zinc-100
                                        "
                                    >
                                        Editar
                                    </a>

                                    <form
                                        method="POST"
                                        action="{{ route('admin.projects.destroy', $project) }}"
                                        onsubmit="return confirm('Deseja realmente excluir este projeto?')"
                                    >
                                        @csrf
                                        @method('DELETE')

                                        <button
                                            type="submit"
                                            class="
                                                rounded-lg border border-red-200
                                                bg-red-50 px-3 py-2 text-xs
                                                font-extrabold text-red-700
                                                hover:bg-red-100
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
                                class="px-6 py-16 text-center text-sm text-zinc-500"
                            >
                                Nenhum projeto encontrado.
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if ($projects->hasPages())
            <div class="border-t border-zinc-200 px-6 py-4">
                {{ $projects->links() }}
            </div>
        @endif
    </div>
@endsection