@php
    $editing = isset($statistic);
@endphp

<div class="grid gap-6 xl:grid-cols-[1fr_340px]">
    <section
        class="
            rounded-2xl border border-zinc-200
            bg-white p-6 shadow-sm
        "
    >
        <h2 class="text-lg font-extrabold text-zinc-950">
            Informações do indicador
        </h2>

        <div class="mt-6 grid gap-6">
            <div>
                <label
                    for="value"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Valor
                </label>

                <input
                    type="text"
                    id="value"
                    name="value"
                    value="{{ old('value', $statistic->value ?? '') }}"
                    required
                    maxlength="50"
                    class="
                        w-full rounded-xl border border-zinc-300
                        bg-white px-4 py-3 text-sm outline-none
                        transition focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Ex.: +200, 15 anos ou 100%"
                >

                <p class="mt-2 text-xs leading-5 text-zinc-500">
                    Este é o número ou texto principal exibido em destaque.
                </p>

                @error('value')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>

            <div>
                <label
                    for="label"
                    class="mb-2 block text-sm font-extrabold text-zinc-800"
                >
                    Descrição
                </label>

                <textarea
                    id="label"
                    name="label"
                    rows="5"
                    required
                    maxlength="180"
                    class="
                        w-full resize-y rounded-xl
                        border border-zinc-300 bg-white
                        px-4 py-3 text-sm outline-none
                        transition focus:border-green-700
                        focus:ring-4 focus:ring-green-100
                    "
                    placeholder="Ex.: Projetos realizados com sucesso"
                >{{ old('label', $statistic->label ?? '') }}</textarea>

                @error('label')
                    <p class="mt-2 text-sm font-semibold text-red-600">
                        {{ $message }}
                    </p>
                @enderror
            </div>
        </div>
    </section>

    <aside class="space-y-6">
        <section
            class="
                rounded-2xl border border-zinc-200
                bg-white p-6 shadow-sm
            "
        >
            <h2 class="text-base font-extrabold text-zinc-950">
                Exibição
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
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                    >
                        @foreach ([
                            'project' => 'Projetos / natureza',
                            'experience' => 'Experiência / certificado',
                            'location' => 'Localização',
                            'check' => 'Confirmação',
                        ] as $value => $label)
                            <option
                                value="{{ $value }}"
                                @selected(
                                    old(
                                        'icon',
                                        $statistic->icon ?? 'check'
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
                        value="{{ old(
                            'sort_order',
                            $statistic->sort_order ?? 0
                        ) }}"
                        required
                        class="
                            w-full rounded-xl border border-zinc-300
                            bg-white px-4 py-3 text-sm outline-none
                            transition focus:border-green-700
                            focus:ring-4 focus:ring-green-100
                        "
                    >

                    <p class="mt-2 text-xs leading-5 text-zinc-500">
                        Valores menores aparecem primeiro.
                    </p>

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
                                $statistic->is_active ?? true
                            )
                        )
                    >

                    <span>
                        <strong class="block text-sm text-zinc-900">
                            Indicador ativo
                        </strong>

                        <span class="mt-1 block text-xs text-zinc-500">
                            Indicadores inativos não aparecem na Home.
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
                {{ $editing ? 'Salvar alterações' : 'Cadastrar indicador' }}
            </button>

            <a
                href="{{ route('admin.statistics.index') }}"
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