@php
    $editing = isset($service);
@endphp

<div class="grid gap-6 xl:grid-cols-[1fr_340px]">
    <div
        class="
            rounded-2xl border border-zinc-200
            bg-white p-6 shadow-sm
        "
    >
        <div class="grid gap-6">
            <div>
                <label
                    for="title"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Título
                </label>

                <input
                    type="text"
                    id="title"
                    name="title"
                    value="{{ old('title', $service->title ?? '') }}"
                    required
                    class="
                        w-full rounded-xl border border-zinc-300
                        bg-white px-4 py-3 text-sm
                        outline-none transition
                        focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Ex.: Licenciamento Ambiental"
                >

                @error('title')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="slug"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Slug
                </label>

                <input
                    type="text"
                    id="slug"
                    name="slug"
                    value="{{ old('slug', $service->slug ?? '') }}"
                    class="
                        w-full rounded-xl border border-zinc-300
                        bg-white px-4 py-3 text-sm
                        outline-none transition
                        focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="licenciamento-ambiental"
                >

                <p class="mt-2 text-xs leading-5 text-zinc-500">
                    Pode deixar vazio. O sistema criará automaticamente.
                </p>

                @error('slug')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="short_description"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Descrição curta
                </label>

                <textarea
                    id="short_description"
                    name="short_description"
                    rows="4"
                    required
                    maxlength="500"
                    class="
                        w-full resize-y rounded-xl
                        border border-zinc-300 bg-white
                        px-4 py-3 text-sm outline-none
                        transition focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Texto exibido no card da Home."
                >{{ old('short_description', $service->short_description ?? '') }}</textarea>

                @error('short_description')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="description"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Descrição completa
                </label>

                <textarea
                    id="description"
                    name="description"
                    rows="10"
                    class="
                        w-full resize-y rounded-xl
                        border border-zinc-300 bg-white
                        px-4 py-3 text-sm outline-none
                        transition focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Conteúdo completo do serviço."
                >{{ old('description', $service->description ?? '') }}</textarea>

                @error('description')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
    </div>

    <aside class="space-y-6">
        <div
            class="
                rounded-2xl border border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-base font-extrabold text-zinc-950">
                Configurações
            </h2>

            <div class="mt-5 space-y-5">
                <div>
                    <label
                        for="icon"
                        class="mb-2 block text-sm font-extrabold text-zinc-800"
                    >
                        Ícone
                    </label>

                    <select
                        id="icon"
                        name="icon"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm
                            outline-none transition
                            focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                    >
                        @foreach ([
                            'document' => 'Documento',
                            'fauna' => 'Fauna',
                            'flora' => 'Flora',
                            'education' => 'Educação',
                            'leaf' => 'Folha',
                        ] as $value => $label)
                            <option
                                value="{{ $value }}"
                                @selected(
                                    old(
                                        'icon',
                                        $service->icon ?? 'leaf'
                                    ) === $value
                                )
                            >
                                {{ $label }}
                            </option>
                        @endforeach
                    </select>

                    @error('icon')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

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
                        max="9999"
                        value="{{ old('sort_order', $service->sort_order ?? 0) }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm
                            outline-none transition
                            focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                    >

                    @error('sort_order')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <label
                    class="
                        flex cursor-pointer items-start gap-3
                        rounded-xl border border-zinc-200 p-4
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
                        class="
                            mt-0.5 h-4 w-4 rounded
                            border-zinc-300 text-green-700
                            focus:ring-green-600
                        "
                        @checked(
                            old(
                                'is_featured',
                                $service->is_featured ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Destacar na Home
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Exibe o serviço entre os principais.
                        </span>
                    </span>
                </label>

                <label
                    class="
                        flex cursor-pointer items-start gap-3
                        rounded-xl border border-zinc-200 p-4
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
                        class="
                            mt-0.5 h-4 w-4 rounded
                            border-zinc-300 text-green-700
                            focus:ring-green-600
                        "
                        @checked(
                            old(
                                'is_active',
                                $service->is_active ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Serviço ativo
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Serviços inativos não aparecem no site.
                        </span>
                    </span>
                </label>
            </div>
        </div>

        <div class="flex flex-col gap-3">
            <button
                type="submit"
                class="
                    inline-flex min-h-12 items-center
                    justify-center rounded-xl
                    bg-green-800 px-5 py-3
                    text-sm font-extrabold text-white
                    transition hover:bg-green-900
                "
            >
                {{ $editing ? 'Salvar alterações' : 'Cadastrar serviço' }}
            </button>

            <a
                href="{{ route('admin.services.index') }}"
                class="
                    inline-flex min-h-12 items-center
                    justify-center rounded-xl
                    border border-zinc-300 bg-white
                    px-5 py-3 text-sm font-extrabold
                    text-zinc-700 transition
                    hover:bg-zinc-100
                "
            >
                Cancelar
            </a>
        </div>
    </aside>
</div>