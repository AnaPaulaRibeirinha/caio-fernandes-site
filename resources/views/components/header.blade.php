<header
    x-data="{ mobileMenuOpen: false }"
    class="absolute inset-x-0 top-0 z-50"
>
    <div class="container-site">
        <div class="flex h-24 items-center justify-between gap-8">

            {{-- Logos --}}
            <div class="relative z-50 flex shrink-0 items-center gap-4">
                <a
                    href="{{ route('home') }}"
                    class="flex items-center"
                    aria-label="Ir para a página inicial"
                >
                    <img
                        src="{{ asset('assets/images/logo/logo-caio-fernandes.png') }}"
                        alt="Biólogo Caio Fernandes"
                        class="
                            h-auto w-[145px] object-contain
                            sm:w-[160px]
                            xl:w-[175px]
                        "
                    >
                </a>

                {{-- Separador --}}
                <span
                    aria-hidden="true"
                    class="
                        hidden h-10 w-px
                        bg-zinc-300
                        sm:block
                    "
                ></span>

                <a
                    href="{{ route('home') }}"
                    class="hidden items-center sm:flex"
                    aria-label="Território Animal"
                >
                    <img
                        src="{{ asset('assets/images/logo/logo-territorio-animal.png') }}"
                        alt="Território Animal"
                        class="
                            h-auto w-[70px] object-contain
                            md:w-[78px]
                            xl:w-[155px]
                        "
                    >
                </a>
            </div>

            {{-- Menu desktop --}}
            <nav
                class="hidden items-center gap-8 lg:flex"
                aria-label="Navegação principal"
            >
                <a
                    href="{{ route('home') }}"
                    class="nav-link {{ request()->routeIs('home') ? 'nav-link-active' : '' }}"
                >
                    Home
                </a>

                <a
                    href="{{ route('sobre') }}"
                    class="nav-link {{ request()->routeIs('sobre') ? 'nav-link-active' : '' }}"
                >
                    Sobre
                </a>

                <div
                    x-data="{ open: false }"
                    class="relative"
                    @mouseenter="open = true"
                    @mouseleave="open = false"
                >
                    <button
                        type="button"
                        class="nav-link flex items-center gap-1.5"
                        @click="open = !open"
                        :aria-expanded="open"
                    >
                        Serviços

                        <svg
                            class="h-4 w-4 transition-transform duration-200"
                            :class="{ 'rotate-180': open }"
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
                        x-cloak
                        x-show="open"
                        x-transition:enter="transition ease-out duration-150"
                        x-transition:enter-start="opacity-0 translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-100"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 translate-y-2"
                        class="absolute left-1/2 top-full w-72 -translate-x-1/2 pt-4"
                    >
                        <div
                            class="rounded-2xl border border-zinc-100 bg-white p-2 shadow-xl shadow-zinc-900/10"
                        >
                            <a
                                href="{{ route('servicos.index') }}#licenciamento"
                                class="dropdown-link"
                            >
                                Licenciamento Ambiental
                            </a>

                            <a
                                href="{{ route('servicos.index') }}#fauna"
                                class="dropdown-link"
                            >
                                Estudos de Fauna
                            </a>

                            <a
                                href="{{ route('servicos.index') }}#flora"
                                class="dropdown-link"
                            >
                                Estudos de Flora
                            </a>

                            <a
                                href="{{ route('servicos.index') }}#educacao"
                                class="dropdown-link"
                            >
                                Educação Ambiental
                            </a>

                            <a
                                href="{{ route('servicos.index') }}"
                                class="dropdown-link font-semibold text-green-700"
                            >
                                Ver todos os serviços
                            </a>
                        </div>
                    </div>
                </div>

                <a
                    href="{{ route('projetos.index') }}"
                    class="nav-link {{ request()->routeIs('projetos.*') ? 'nav-link-active' : '' }}"
                >
                    Projetos
                </a>

                <a
                    href="{{ route('clipping.index') }}"
                    class="nav-link {{ request()->routeIs('clipping.*') ? 'nav-link-active' : '' }}"
                >
                    Clipping
                </a>

                <a
                    href="{{ route('contato') }}"
                    class="nav-link {{ request()->routeIs('contato') ? 'nav-link-active' : '' }}"
                >
                    Contato
                </a>
            </nav>

            {{-- Botão desktop --}}
            <div class="hidden lg:block">
                <a
                    href="https://wa.me/5515998546600"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="button-primary"
                >
                    Fale comigo

                    <svg
                        class="h-4 w-4"
                        viewBox="0 0 24 24"
                        fill="none"
                        stroke="currentColor"
                        stroke-width="2"
                    >
                        <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6A8.38 8.38 0 0 1 12.5 3h.5a8.48 8.48 0 0 1 8 8Z"
                        />
                    </svg>
                </a>
            </div>

            {{-- Botão menu mobile --}}
            <button
                type="button"
                class="relative z-50 flex h-11 w-11 items-center justify-center rounded-full border border-zinc-200 bg-white text-zinc-900 lg:hidden"
                @click="mobileMenuOpen = !mobileMenuOpen"
                :aria-expanded="mobileMenuOpen"
                aria-label="Abrir menu"
            >
                <svg
                    x-show="!mobileMenuOpen"
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M4 6h16M4 12h16M4 18h16"
                    />
                </svg>

                <svg
                    x-cloak
                    x-show="mobileMenuOpen"
                    class="h-6 w-6"
                    viewBox="0 0 24 24"
                    fill="none"
                    stroke="currentColor"
                    stroke-width="2"
                >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        d="M6 18 18 6M6 6l12 12"
                    />
                </svg>
            </button>
        </div>
    </div>

    {{-- Menu mobile --}}
    <div
        x-cloak
        x-show="mobileMenuOpen"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 -translate-y-4"
        x-transition:enter-end="opacity-100 translate-y-0"
        x-transition:leave="transition ease-in duration-150"
        x-transition:leave-start="opacity-100 translate-y-0"
        x-transition:leave-end="opacity-0 -translate-y-4"
        class="fixed inset-0 z-40 overflow-y-auto bg-white px-5 pb-10 pt-28 lg:hidden"
    >
        <nav class="flex flex-col divide-y divide-zinc-100">
            <a href="{{ route('home') }}" class="mobile-nav-link">
                Home
            </a>

            <a href="{{ route('sobre') }}" class="mobile-nav-link">
                Sobre
            </a>

            <a href="{{ route('servicos.index') }}" class="mobile-nav-link">
                Serviços
            </a>

            <a href="{{ route('projetos.index') }}" class="mobile-nav-link">
                Projetos
            </a>

            <a href="{{ route('clipping.index') }}" class="mobile-nav-link">
                Clipping
            </a>

            <a href="{{ route('contato') }}" class="mobile-nav-link">
                Contato
            </a>
        </nav>

        <a
            href="https://wa.me/5515998546600"
            target="_blank"
            rel="noopener noreferrer"
            class="button-primary mt-8 w-full justify-center"
        >
            Fale comigo pelo WhatsApp
        </a>
    </div>
</header>