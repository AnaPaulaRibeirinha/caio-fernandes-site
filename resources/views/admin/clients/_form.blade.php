@php
    $editing = isset($client);
@endphp

<div class="grid gap-6 xl:grid-cols-[1fr_340px]">
    {{-- Principal --}}
    <section
        class="
            rounded-2xl border border-zinc-200
            bg-white p-6 shadow-sm
        "
    >
        <h2 class="text-lg font-extrabold text-zinc-950">
            Informações do cliente
        </h2>

        <div class="mt-6 grid gap-6">
            <div>
                <label
                    for="name"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Nome
                </label>

                <input
                    type="text"
                    id="name"
                    name="name"
                    required
                    value="{{ old('name', $client->name ?? '') }}"
                    class="
                        w-full rounded-xl
                        border border-zinc-300
                        px-4 py-3 text-sm
                        outline-none transition
                        focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Ex.: Empresa ABC"
                >

                @error('name')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="website"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Site
                </label>

                <input
                    type="url"
                    id="website"
                    name="website"
                    value="{{ old('website', $client->website ?? '') }}"
                    class="
                        w-full rounded-xl
                        border border-zinc-300
                        px-4 py-3 text-sm
                        outline-none transition
                        focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="https://cliente.com.br"
                >

                @error('website')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="logo"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Logo
                </label>

                <input
                    type="file"
                    id="logo"
                    name="logo"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="
                        block w-full rounded-xl
                        border border-zinc-300
                        bg-white px-4 py-3
                        text-sm text-zinc-600
                    "
                >

                <p class="mt-2 text-xs text-zinc-500">
                    Preferencialmente PNG com fundo transparente.
                </p>

                @error('logo')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror

                @if ($editing && $client->logo)
                    <div
                        class="
                            mt-5 flex min-h-[180px]
                            items-center justify-center
                            rounded-2xl border
                            border-zinc-200
                            bg-zinc-50 p-8
                        "
                    >
                        <img
                            src="{{ asset($client->logo) }}"
                            alt="{{ $client->name }}"
                            class="max-h-28 max-w-full object-contain"
                        >
                    </div>

                    <label
                        class="
                            mt-4 flex items-center
                            gap-2 text-sm text-zinc-600
                        "
                    >
                        <input
                            type="checkbox"
                            name="remove_logo"
                            value="1"
                        >

                        Remover logo atual
                    </label>
                @endif
            </div>
        </div>
    </section>

    {{-- Configuração --}}
    <aside class="space-y-6">
        <section
            class="
                rounded-2xl border
                border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-base font-extrabold text-zinc-950">
                Exibição
            </h2>

            <div class="mt-5 space-y-5">
                <div>
                    <label
                        for="sort_order"
                        class="mb-2 block text-sm font-extrabold text-zinc-800"
                    >
                        Ordem
                    </label>

                    <input
                        type="number"
                        id="sort_order"
                        name="sort_order"
                        min="0"
                        value="{{ old('sort_order', $client->sort_order ?? 0) }}"
                        class="
                            w-full rounded-xl
                            border border-zinc-300
                            px-4 py-3 text-sm
                        "
                    >
                </div>

                <label
                    class="
                        flex cursor-pointer items-start gap-3
                        rounded-xl border
                        border-zinc-200 p-4
                    "
                >
                    <input
                        type="hidden"
                        name="is_featured"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        name="is_featured"
                        value="1"
                        class="mt-1"
                        @checked(old(
                            'is_featured',
                            $client->is_featured ?? true
                        ))
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Destaque na Home
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Mostrar no carrossel de clientes.
                        </span>
                    </span>
                </label>

                <label
                    class="
                        flex cursor-pointer items-start gap-3
                        rounded-xl border
                        border-zinc-200 p-4
                    "
                >
                    <input
                        type="hidden"
                        name="is_active"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        name="is_active"
                        value="1"
                        class="mt-1"
                        @checked(old(
                            'is_active',
                            $client->is_active ?? true
                        ))
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Cliente ativo
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Clientes inativos não aparecem no site.
                        </span>
                    </span>
                </label>
            </div>
        </section>

        <div class="flex flex-col gap-3">
            <button
                type="submit"
                class="
                    min-h-12 rounded-xl
                    bg-green-800 px-5 py-3
                    text-sm font-extrabold
                    text-white hover:bg-green-900
                "
            >
                {{ $editing ? 'Salvar alterações' : 'Cadastrar cliente' }}
            </button>

            <a
                href="{{ route('admin.clients.index') }}"
                class="
                    min-h-12 rounded-xl
                    border border-zinc-300
                    bg-white px-5 py-3
                    text-center text-sm
                    font-extrabold text-zinc-700
                "
            >
                Cancelar
            </a>
        </div>
    </aside>
</div>