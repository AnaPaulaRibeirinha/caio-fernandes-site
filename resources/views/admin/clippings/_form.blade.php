@php
    $editing = isset($clipping);
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
                Informações da publicação
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
                        value="{{ old('title', $clipping->title ?? '') }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Título da notícia ou publicação"
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
                        value="{{ old('slug', $clipping->slug ?? '') }}"
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="titulo-da-publicacao"
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

                <div class="grid gap-6 md:grid-cols-2">
                    <div>
                        <label
                            for="source"
                            class="mb-2 block text-sm font-extrabold text-zinc-800"
                        >
                            Fonte ou veículo
                        </label>

                        <input
                            type="text"
                            id="source"
                            name="source"
                            value="{{ old('source', $clipping->source ?? '') }}"
                            class="
                                w-full rounded-xl border border-zinc-300
                                bg-white px-4 py-3 text-sm outline-none
                                transition focus:border-green-700
                                focus:ring-4 focus:ring-green-100
                            "
                            placeholder="Ex.: Jornal Regional"
                        >

                        @error('source')
                            <p class="mt-2 text-sm font-semibold text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>

                    <div>
                        <label
                            for="published_at"
                            class="mb-2 block text-sm font-extrabold text-zinc-800"
                        >
                            Data de publicação
                        </label>

                        <input
                            type="date"
                            id="published_at"
                            name="published_at"
                            value="{{ old(
                                'published_at',
                                isset($clipping) && $clipping->published_at
                                    ? $clipping->published_at->format('Y-m-d')
                                    : date('Y-m-d')
                            ) }}"
                            class="
                                w-full rounded-xl border border-zinc-300
                                bg-white px-4 py-3 text-sm outline-none
                                transition focus:border-green-700
                                focus:ring-4 focus:ring-green-100
                            "
                        >

                        @error('published_at')
                            <p class="mt-2 text-sm font-semibold text-red-600">
                                {{ $message }}
                            </p>
                        @enderror
                    </div>
                </div>

                <div>
                    <label
                        for="external_url"
                        class="mb-2 block text-sm font-extrabold text-zinc-800"
                    >
                        Link externo
                    </label>

                    <input
                        type="url"
                        id="external_url"
                        name="external_url"
                        value="{{ old(
                            'external_url',
                            $clipping->external_url ?? ''
                        ) }}"
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="https://exemplo.com.br/materia"
                    >

                    <p class="mt-2 text-xs leading-5 text-zinc-500">
                        Preencha quando a matéria estiver publicada em outro
                        site. Deixe vazio para futuramente abrir uma página
                        interna.
                    </p>

                    @error('external_url')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label
                        for="excerpt"
                        class="mb-2 block text-sm font-extrabold text-zinc-800"
                    >
                        Resumo
                    </label>

                    <textarea
                        id="excerpt"
                        name="excerpt"
                        rows="5"
                        maxlength="700"
                        required
                        class="
                            w-full resize-y rounded-xl
                            border border-zinc-300 bg-white
                            px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Resumo exibido no card da publicação."
                    >{{ old('excerpt', $clipping->excerpt ?? '') }}</textarea>

                    @error('excerpt')
                        <p class="mt-2 text-sm font-semibold text-red-600">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div>
                    <label
                        for="content"
                        class="mb-2 block text-sm font-extrabold text-zinc-800"
                    >
                        Conteúdo completo
                    </label>

                    <textarea
                        id="content"
                        name="content"
                        rows="14"
                        class="
                            w-full resize-y rounded-xl
                            border border-zinc-300 bg-white
                            px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                        placeholder="Conteúdo completo da publicação, caso ela seja exibida dentro do próprio site."
                    >{{ old('content', $clipping->content ?? '') }}</textarea>

                    @error('content')
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
                Imagem
            </h2>

            @if ($editing && $clipping->image)
                <div
                    class="
                        mt-5 overflow-hidden rounded-xl
                        border border-zinc-200 bg-zinc-100
                    "
                >
                    <img
                        src="{{ asset($clipping->image) }}"
                        alt="{{ $clipping->title }}"
                        class="aspect-[16/10] w-full object-cover"
                    >
                </div>
            @endif

            <div class="mt-5">
                <input
                    type="file"
                    id="image"
                    name="image"
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

                @error('image')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            @if ($editing && $clipping->image)
                <label
                    class="
                        mt-5 flex cursor-pointer items-start gap-3
                        rounded-xl border border-red-100
                        bg-red-50 p-4
                    "
                >
                    <input
                        type="hidden"
                        name="remove_image"
                        value="0"
                    >

                    <input
                        type="checkbox"
                        name="remove_image"
                        value="1"
                        class="
                            mt-0.5 h-4 w-4 rounded
                            border-red-300 text-red-600
                            focus:ring-red-500
                        "
                        @checked(old('remove_image'))
                    >

                    <span>
                        <strong class="block text-sm text-red-700">
                            Remover imagem atual
                        </strong>

                        <span class="mt-1 block text-xs text-red-600/75">
                            A imagem será removida ao salvar.
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
                        value="{{ old(
                            'sort_order',
                            $clipping->sort_order ?? 0
                        ) }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
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
                                $clipping->is_featured ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Destacar na Home
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Permite que a publicação apareça na Home.
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
                                $clipping->is_active ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Publicação ativa
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Publicações inativas não aparecem no site.
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
                {{ $editing ? 'Salvar alterações' : 'Cadastrar publicação' }}
            </button>

            <a
                href="{{ route('admin.clippings.index') }}"
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