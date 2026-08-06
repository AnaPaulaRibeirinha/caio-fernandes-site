<section
    id="projetos"
    class="relative overflow-hidden bg-[#f7f8f4] py-20 lg:py-28"
>
    {{-- Elemento decorativo --}}
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute
            -left-28 top-16 h-72 w-72
            rounded-full border-[38px]
            border-lime-200/40
        "
    ></div>

    <div class="container-site relative">
        {{-- Cabeçalho --}}
        <div
            class="
                flex flex-col gap-7
                lg:flex-row lg:items-end
                lg:justify-between
            "
        >
            <div>
                <span class="section-eyebrow">
                    Projetos
                </span>

                <h2 class="section-title mt-4">
                    Experiência aplicada em diferentes contextos ambientais
                </h2>
            </div>

            <div class="max-w-md">
                <p class="text-base leading-8 text-zinc-600">
                    Conheça alguns trabalhos desenvolvidos em licenciamento,
                    monitoramento, conservação e educação ambiental.
                </p>

                <a
                    href="{{ route('projetos.index') }}"
                    class="button-secondary mt-6"
                >
                    Ver todos os projetos

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

        {{-- Grid --}}
        <div class="mt-12 grid gap-6 lg:grid-cols-2">
            @forelse ($projects as $index => $project)
                <x-project-card
                    :title="$project->title"
                    :description="$project->short_description"
                    :image="$project->cover_image ?? ''"
                    :category="$project->category"
                    :location="$project->location ?? 'Local não informado'"
                    :year="$project->year ?? ''"
                    :url="route('projetos.index') . '#' . $project->slug"
                    :featured="$index === 0"
                />
            @empty
                <p class="col-span-full text-zinc-500">
                    Nenhum projeto publicado.
                </p>
            @endforelse
        </div>

        {{-- Observação --}}
        <p
            class="
                mt-8 text-center text-xs
                leading-5 text-zinc-500
            "
        >
            Os projetos apresentados nesta demonstração utilizam conteúdos
            ilustrativos e deverão ser substituídos pelos trabalhos reais do
            profissional.
        </p>
    </div>
</section>