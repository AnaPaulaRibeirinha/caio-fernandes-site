<section
    class="
        relative overflow-hidden
        bg-gradient-to-r
        from-[#bad63b]
        via-[#c5dc4e]
        to-[#b1ce2f]
    "
>
    {{-- Textura discreta --}}
    <div
        aria-hidden="true"
        class="
            pointer-events-none absolute inset-0 opacity-[0.08]
        "
        style="
            background-image:
                radial-gradient(
                    circle at 20% 30%,
                    #164d2b 0,
                    transparent 35%
                ),
                radial-gradient(
                    circle at 80% 70%,
                    #ffffff 0,
                    transparent 30%
                );
        "
    ></div>

    <div class="container-site relative">
        <div
            class="
                grid divide-y divide-green-950/10
                sm:grid-cols-2
                sm:divide-y-0
                lg:grid-cols-4
            "
        >
            @forelse ($statistics as $statistic)
                <x-statistic-item
                    :value="$statistic->value"
                    :label="$statistic->label"
                    :icon="$statistic->icon"
                />
            @empty
                <p class="col-span-full py-8 text-center text-green-950/70">
                    Indicadores ainda não cadastrados.
                </p>
            @endforelse
        </div>
    </div>
</section>