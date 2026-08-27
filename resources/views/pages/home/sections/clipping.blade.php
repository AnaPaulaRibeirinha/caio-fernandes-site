<section
    id="clipping"
    class="relative overflow-hidden bg-white py-20 lg:py-28"
>
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -right-28 top-12
            h-72 w-72 rounded-full
            border-[40px] border-lime-100/60
        "
    ></div>

    <div class="container-site relative">
        <div
            class="
                flex flex-col gap-7
                lg:flex-row lg:items-end
                lg:justify-between
            "
        >
            <div>
                <span class="section-eyebrow">
                    Clipping
                </span>

                <h2 class="section-title mt-4">
                    Conhecimento ambiental também se constrói compartilhando
                    informação
                </h2>
            </div>

            <div class="max-w-md">
                <p class="text-base leading-8 text-zinc-600">
                    Entrevistas, publicações, notícias e conteúdos relacionados
                    à atuação profissional e ao meio ambiente.
                </p>

                <a
                    href="{{ route('clipping.index') }}"
                    class="button-secondary mt-6"
                >
                    Ver todas as publicações

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                        aria-hidden="true"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M5 12h14m-6-6 6 6-6 6"
                        />
                    </svg>
                </a>
            </div>
        </div>

        @if ($clippings->isNotEmpty())
            <div class="mt-12 grid gap-6 lg:grid-cols-[1.1fr_0.9fr]">
                <x-clipping-card
                    :title="$clippings->first()->title"
                    :excerpt="$clippings->first()->excerpt"
                    :image="$clippings->first()->image ?? ''"
                    :source="$clippings->first()->source ?? 'Publicação'"
                    :date="$clippings->first()->published_at?->format('d/m/Y') ?? ''"
                    :url="$clippings->first()->external_url
                        ?: route('clipping.index') . '#' . $clippings->first()->slug"
                    featured
                />

                <div class="grid gap-5">
                    @foreach ($clippings->skip(1) as $clipping)
                        <x-clipping-card
                            :title="$clipping->title"
                            :excerpt="$clipping->excerpt"
                            :image="$clipping->image ?? ''"
                            :source="$clipping->source ?? 'Publicação'"
                            :date="$clipping->published_at?->format('d/m/Y') ?? ''"
                            :url="$clipping->external_url
                                ?: route('clipping.index') . '#' . $clipping->slug"
                        />
                    @endforeach
                </div>
            </div>
        @else
            <div class="mt-12 rounded-2xl bg-zinc-50 p-8 text-zinc-500">
                Nenhuma publicação cadastrada.
            </div>
        @endif

</section>