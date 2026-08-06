@php
    $editing = isset($project);

    $selectedCategory = old(
        'category',
        $project->category ?? ''
    );
@endphp

<div class="grid gap-6 xl:grid-cols-[1fr_360px]">
    <div class="space-y-6">
        <section
            class="
                rounded-2xl border border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-lg font-extrabold text-zinc-950">
                Informações principais
            </h2>

            <div class="mt-6 grid gap-6">
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
                        value="{{ old('title', $project->title ?? '') }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Ex.: Monitoramento de fauna silvestre"
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
                        value="{{ old('slug', $project->slug ?? '') }}"
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="monitoramento-de-fauna-silvestre"
                    >

                    <p class="mt-2 text-xs text-zinc-500">
                        Pode deixar vazio para gerar automaticamente.
                    </p>

                    @error('slug')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="grid gap-6 md:grid-cols-3">
                    <div>
                        <label
                            for="category"
                            class="mb-2 block text-sm font-extrabold text-zinc-800"
                        >
                            Categoria
                        </label>

                        <select
                            id="category"
                            name="category"
                            required
                            class="
                                w-full rounded-xl border border-zinc-300
                                bg-white px-4 py-3 text-sm outline-none
                                transition focus:border-green-700
                                focus:ring-4 focus:ring-green-100
                            "
                        >
                            <option value="">Selecione</option>

                            @foreach ([
                                'Licenciamento',
                                'Fauna',
                                'Flora',
                                'Educação ambiental',
                                'Consultoria ambiental',
                                'Monitoramento',
                                'Outros',
                            ] as $categoryOption)
                                <option
                                    value="{{ $categoryOption }}"
                                    @selected(
                                        $selectedCategory === $categoryOption
                                    )
                                >
                                    {{ $categoryOption }}
                                </option>
                            @endforeach
                        </select>

                        @error('category')
                            <p class="mt-2 text-sm font-semibold text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label
                            for="location"
                            class="mb-2 block text-sm font-extrabold text-zinc-800"
                        >
                            Localização
                        </label>

                        <input
                            type="text"
                            id="location"
                            name="location"
                            value="{{ old('location', $project->location ?? '') }}"
                            class="
                                w-full rounded-xl border border-zinc-300
                                bg-white px-4 py-3 text-sm outline-none
                                transition focus:border-green-700
                                focus:ring-4 focus:ring-green-100
                            "
                            placeholder="Sorocaba, SP"
                        >

                        @error('location')
                            <p class="mt-2 text-sm font-semibold text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label
                            for="year"
                            class="mb-2 block text-sm font-extrabold text-zinc-800"
                        >
                            Ano
                        </label>

                        <input
                            type="number"
                            id="year"
                            name="year"
                            min="1900"
                            max="{{ date('Y') + 5 }}"
                            value="{{ old('year', $project->year ?? date('Y')) }}"
                            class="
                                w-full rounded-xl border border-zinc-300
                                bg-white px-4 py-3 text-sm outline-none
                                transition focus:border-green-700
                                focus:ring-4 focus:ring-green-100
                            "
                        >

                        @error('year')
                            <p class="mt-2 text-sm font-semibold text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
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
                        maxlength="700"
                        required
                        class="
                            w-full resize-y rounded-xl
                            border border-zinc-300 bg-white
                            px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Resumo exibido nos cards da Home."
                    >{{ old('short_description', $project->short_description ?? '') }}</textarea>

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
                        rows="12"
                        class="
                            w-full resize-y rounded-xl
                            border border-zinc-300 bg-white
                            px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Explique o contexto, atividades realizadas e resultados."
                    >{{ old('description', $project->description ?? '') }}</textarea>

                    @error('description')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>
            </div>
        </section>
    </div>

    <aside class="space-y-6">
        <section
            class="
                rounded-2xl border border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-base font-extrabold text-zinc-950">
                Imagem de capa
            </h2>

            @if (
                $editing
                && $project->cover_image
            )
                <div
                    class="
                        mt-5 overflow-hidden rounded-xl
                        border border-zinc-200 bg-zinc-100
                    "
                >
                    <img
                        src="{{ asset($project->cover_image) }}"
                        alt="{{ $project->title }}"
                        class="aspect-[4/3] w-full object-cover"
                    >
                </div>
            @endif

            <div class="mt-5">
                <input
                    type="file"
                    id="cover_image"
                    name="cover_image"
                    accept=".jpg,.jpeg,.png,.webp"
                    class="
                        block w-full text-sm text-zinc-600
                        file:mr-4 file:rounded-lg file:border-0
                        file:bg-green-50 file:px-4 file:py-2.5
                        file:text-sm file:font-extrabold
                        file:text-green-800
                        hover:file:bg-green-100
                    "
                >

                <p class="mt-3 text-xs leading-5 text-zinc-500">
                    JPG, PNG ou WEBP. Tamanho máximo de 5 MB.
                </p>

                @error('cover_image')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            @if ($editing && $project->cover_image)
                <label
                    class="
                        mt-5 flex cursor-pointer items-start gap-3
                        rounded-xl border border-red-100
                        bg-red-50 p-4
                    "
                >
                    <input
                        type="hidden"
                        name="remove_cover_image"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        name="remove_cover_image"
                        value="1"
                        class="
                            mt-0.5 h-4 w-4 rounded
                            border-red-300 text-red-600
                            focus:ring-red-500
                        "
                        @checked(old('remove_cover_image'))
                    >

                    <span>
                        <strong class="block text-sm text-red-700">
                            Remover imagem atual
                        </strong>

                        <span class="mt-1 block text-xs text-red-600/75">
                            A imagem será excluída ao salvar.
                        </span>
                    </span>
                </label>
            @endif
        </section>

        <section
            class="
                rounded-2xl border border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-base font-extrabold text-zinc-950">
                Publicação
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
                        max="9999"
                        value="{{ old('sort_order', $project->sort_order ?? 0) }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                    >
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
                                $project->is_featured ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Destacar na Home
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            O projeto poderá aparecer entre os destaques.
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
                                $project->is_active ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Projeto ativo
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Projetos inativos não aparecem no site.
                        </span>
                    </span>
                </label>
            </div>
        </section>

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
                {{ $editing ? 'Salvar alterações' : 'Cadastrar projeto' }}
            </button>

            <a
                href="{{ route('admin.projects.index') }}"
                class="
                    inline-flex min-h-12 items-center
                    justify-center rounded-xl
                    border border-zinc-300 bg-white
                    px-5 py-3 text-sm font-extrabold
                    text-zinc-700 transition hover:bg-zinc-100
                "
            >
                Cancelar
            </a>
        </div>
    </aside>
</div>