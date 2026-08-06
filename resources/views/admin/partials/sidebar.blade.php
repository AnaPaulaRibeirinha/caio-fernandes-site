<aside
    class="
        fixed inset-y-0 left-0 z-50
        flex w-72 flex-col
        bg-green-950 text-white
        transition-transform duration-300
        lg:translate-x-0
    "
    :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'"
>
    <div
        class="
            flex h-20 shrink-0 items-center
            justify-between border-b border-white/10
            px-6
        "
    >
        <a
            href="{{ route('admin.dashboard') }}"
            class="flex items-center gap-3"
        >
            <div
                class="
                    flex h-11 w-11 items-center
                    justify-center rounded-xl
                    bg-lime-300 font-black
                    text-green-950
                "
            >
                CF
            </div>

            <div>
                <strong class="block text-sm font-extrabold">
                    Caio Fernandes
                </strong>

                <span class="text-xs text-white/55">
                    Painel administrativo
                </span>
            </div>
        </a>

        <button
            type="button"
            class="
                flex h-10 w-10 items-center
                justify-center rounded-lg
                text-white/70 hover:bg-white/10
                lg:hidden
            "
            @click="sidebarOpen = false"
            aria-label="Fechar menu"
        >
            <svg
                class="h-5 w-5"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m6 6 12 12M18 6 6 18"
                />
            </svg>
        </button>
    </div>

    <nav class="flex-1 overflow-y-auto px-4 py-6">
        <span
            class="
                mb-3 block px-3
                text-[0.65rem] font-extrabold
                uppercase tracking-[0.18em]
                text-white/35
            "
        >
            Visão geral
        </span>

        <a
            href="{{ route('admin.dashboard') }}"
            @class([
                'flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-bold transition',
                'bg-lime-300 text-green-950' => request()->routeIs('admin.dashboard'),
                'text-white/70 hover:bg-white/10 hover:text-white' => !request()->routeIs('admin.dashboard'),
            ])
        >
            <svg
                class="h-5 w-5 shrink-0"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <rect x="3" y="3" width="7" height="7" rx="1"></rect>
                <rect x="14" y="3" width="7" height="7" rx="1"></rect>
                <rect x="3" y="14" width="7" height="7" rx="1"></rect>
                <rect x="14" y="14" width="7" height="7" rx="1"></rect>
            </svg>

            Dashboard
        </a>

        <span
            class="
                mb-3 mt-8 block px-3
                text-[0.65rem] font-extrabold
                uppercase tracking-[0.18em]
                text-white/35
            "
        >
            Conteúdo
        </span>

        @php
            $menuItems = [
                [
                    'label' => 'Serviços',
                    'route' => 'admin.services.index',
                    'pattern' => 'admin.services.*',
                    'icon' => 'services',
                ],
                [
                    'label' => 'Projetos',
                    'route' => 'admin.projects.index',
                    'pattern' => 'admin.projects.*',
                    'icon' => 'projects',
                ],
                [
                    'label' => 'Clipping',
                    'route' => 'admin.clippings.index',
                    'pattern' => 'admin.clippings.*',
                    'icon' => 'clipping',
                ],
                [
                    'label' => 'Indicadores',
                    'route' => 'admin.statistics.index',
                    'pattern' => 'admin.statistics.*',
                    'icon' => 'statistics',
                ],
            ];
        @endphp

        @foreach ($menuItems as $item)
            @php
                $routeExists = Route::has($item['route']);
                $isActive = request()->routeIs($item['pattern']);
            @endphp

            @if ($routeExists)
                <a
                    href="{{ route($item['route']) }}"
                    @class([
                        'mt-1 flex items-center gap-3 rounded-xl px-4 py-3 text-sm font-bold transition',
                        'bg-white/15 text-lime-300' => $isActive,
                        'text-white/65 hover:bg-white/10 hover:text-white' => !$isActive,
                    ])
                >
                    @if ($item['icon'] === 'services')
                        <svg
                            class="h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M12 3v18M3 12h18"></path>
                            <circle cx="12" cy="12" r="9"></circle>
                        </svg>
                    @elseif ($item['icon'] === 'projects')
                        <svg
                            class="h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M3 7h18v13H3z"></path>
                            <path d="M8 7V4h8v3"></path>
                        </svg>
                    @elseif ($item['icon'] === 'clipping')
                        <svg
                            class="h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M4 4h16v16H4z"></path>
                            <path d="M8 8h8M8 12h8M8 16h5"></path>
                        </svg>
                    @else
                        <svg
                            class="h-5 w-5 shrink-0"
                            viewBox="0 0 24 24"
                            fill="none"
                            stroke="currentColor"
                            stroke-width="2"
                        >
                            <path d="M5 20V10M12 20V4M19 20v-7"></path>
                        </svg>
                    @endif

                    {{ $item['label'] }}
                </a>
            @endif
        @endforeach

        <span
            class="
                mb-3 mt-8 block px-3
                text-[0.65rem] font-extrabold
                uppercase tracking-[0.18em]
                text-white/35
            "
        >
            Site
        </span>

        <a
            href="{{ route('home') }}"
            target="_blank"
            rel="noopener noreferrer"
            class="
                flex items-center gap-3 rounded-xl
                px-4 py-3 text-sm font-bold
                text-white/65 transition
                hover:bg-white/10 hover:text-white
            "
        >
            <svg
                class="h-5 w-5 shrink-0"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path d="M14 3h7v7"></path>
                <path d="M10 14 21 3"></path>
                <path d="M21 14v6a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V4a1 1 0 0 1 1-1h6"></path>
            </svg>

            Visualizar site
        </a>
    </nav>

    <div class="border-t border-white/10 p-4">
        <form
            method="POST"
            action="{{ route('logout') }}"
        >
            @csrf

            <button
                type="submit"
                class="
                    flex w-full items-center gap-3
                    rounded-xl px-4 py-3
                    text-sm font-bold text-white/65
                    transition hover:bg-red-500/15
                    hover:text-red-200
                "
            >
                <svg
                    class="h-5 w-5"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path d="M10 17 15 12 10 7"></path>
                    <path d="M15 12H3"></path>
                    <path d="M15 3h5a1 1 0 0 1 1 1v16a1 1 0 0 1-1 1h-5"></path>
                </svg>

                Sair do painel
            </button>
        </form>
    </div>
</aside>