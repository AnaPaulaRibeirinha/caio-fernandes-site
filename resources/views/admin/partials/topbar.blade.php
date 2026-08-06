<header
    class="
        sticky top-0 z-30 flex h-20
        items-center justify-between
        border-b border-zinc-200
        bg-white/90 px-4 backdrop-blur-xl
        sm:px-6 lg:px-8
    "
>
    <div class="flex items-center gap-4">
        <button
            type="button"
            class="
                flex h-11 w-11 items-center
                justify-center rounded-xl
                border border-zinc-200 bg-white
                text-zinc-700 shadow-sm
                lg:hidden
            "
            @click="sidebarOpen = true"
            aria-label="Abrir menu"
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
                    d="M4 7h16M4 12h16M4 17h16"
                />
            </svg>
        </button>

        <div>
            <span
                class="
                    block text-xs font-bold
                    uppercase tracking-wider
                    text-zinc-400
                "
            >
                Administração
            </span>

            <strong class="block text-base font-extrabold text-zinc-900">
                @yield('page-title', 'Dashboard')
            </strong>
        </div>
    </div>

    <div
        x-data="{ open: false }"
        class="relative"
    >
        <button
            type="button"
            class="
                flex items-center gap-3
                rounded-xl p-2 transition
                hover:bg-zinc-100
            "
            @click="open = !open"
            @click.outside="open = false"
        >
            <div
                class="
                    flex h-10 w-10 items-center
                    justify-center rounded-full
                    bg-green-100 text-sm font-black
                    text-green-800
                "
            >
                {{ strtoupper(substr(auth()->user()->name, 0, 1)) }}
            </div>

            <div class="hidden text-left sm:block">
                <strong class="block text-sm font-bold text-zinc-900">
                    {{ auth()->user()->name }}
                </strong>

                <span class="block max-w-44 truncate text-xs text-zinc-500">
                    {{ auth()->user()->email }}
                </span>
            </div>

            <svg
                class="hidden h-4 w-4 text-zinc-400 sm:block"
                viewBox="0 0 24 24"
                fill="none"
                stroke="currentColor"
                stroke-width="2"
            >
                <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    d="m6 9 6 6 6-6"
                />
            </svg>
        </button>

        <div
            x-show="open"
            x-transition
            class="
                absolute right-0 mt-2 w-56
                overflow-hidden rounded-2xl
                border border-zinc-200 bg-white
                p-2 shadow-xl
            "
            style="display: none;"
        >
            @if (Route::has('profile.edit'))
                <a
                    href="{{ route('profile.edit') }}"
                    class="
                        block rounded-xl px-4 py-3
                        text-sm font-semibold text-zinc-700
                        hover:bg-zinc-100
                    "
                >
                    Meu perfil
                </a>
            @endif

            <a
                href="{{ route('home') }}"
                target="_blank"
                class="
                    block rounded-xl px-4 py-3
                    text-sm font-semibold text-zinc-700
                    hover:bg-zinc-100
                "
            >
                Visualizar site
            </a>

            <div class="my-2 border-t border-zinc-100"></div>

            <form
                method="POST"
                action="{{ route('logout') }}"
            >
                @csrf

                <button
                    type="submit"
                    class="
                        w-full rounded-xl px-4 py-3
                        text-left text-sm font-semibold
                        text-red-600 hover:bg-red-50
                    "
                >
                    Sair
                </button>
            </form>
        </div>
    </div>
</header>