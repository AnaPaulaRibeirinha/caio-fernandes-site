<section
    id="servicos"
    class="relative overflow-hidden bg-[#f8f9f5] py-20 lg:py-28"
>
    {{-- Decoração de fundo --}}
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute -left-24 bottom-[-150px]
            h-80 w-80 rounded-full border-[45px] border-lime-100/70
        "
    ></div>

    <div class="container-site relative">
        <div
            class="
                grid items-start gap-12
                lg:grid-cols-[0.55fr_1.45fr]
                lg:gap-16
            "
        >
            {{-- Introdução --}}
            <div class="lg:sticky lg:top-28">
                <span class="section-eyebrow">
                    Serviços
                </span>

                <h2 class="section-title mt-4">
                    Soluções completas para diferentes necessidades
                </h2>

                <p class="section-description mt-6">
                    Acompanhamento técnico especializado para empresas,
                    propriedades, empreendimentos e instituições que precisam
                    atender às exigências ambientais com segurança.
                </p>

                <a
                    href="{{ route('servicos.index') }}"
                    class="button-secondary mt-8"
                >
                    Ver todos os serviços

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

            {{-- Cards --}}
            <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                @forelse ($services as $service)
                    <x-service-card
                        :id="$service->slug"
                        :title="$service->title"
                        :description="$service->short_description"
                        :url="route('servicos.index') . '#' . $service->slug"
                        :icon="$service->icon"
                    />
                @empty
                    <p class="col-span-full text-zinc-500">
                        Nenhum serviço publicado.
                    </p>
                @endforelse
            </div>
        </div>
    </div>
</section>