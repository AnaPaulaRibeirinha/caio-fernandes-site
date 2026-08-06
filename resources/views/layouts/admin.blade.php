<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">

        <meta
            name="viewport"
            content="width=device-width, initial-scale=1.0"
        >

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @yield('title', 'Painel administrativo')
            | {{ config('app.name') }}
        </title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @stack('styles')
    </head>

    <body class="bg-zinc-100 text-zinc-950 antialiased">
        <div
            x-data="{ sidebarOpen: false }"
            class="min-h-screen"
        >
            @include('admin.partials.sidebar')

            <div class="lg:pl-72">
                @include('admin.partials.topbar')

                <main class="px-4 py-6 sm:px-6 lg:px-8 lg:py-8">
                    @if (session('success'))
                        <div
                            class="
                                mb-6 flex items-start justify-between gap-4
                                rounded-2xl border border-green-200
                                bg-green-50 px-5 py-4
                                text-sm font-semibold text-green-800
                            "
                        >
                            <span>{{ session('success') }}</span>

                            <button
                                type="button"
                                onclick="this.parentElement.remove()"
                                class="text-green-700 hover:text-green-950"
                                aria-label="Fechar mensagem"
                            >
                                ×
                            </button>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div
                            class="
                                mb-6 rounded-2xl border border-red-200
                                bg-red-50 px-5 py-4 text-red-800
                            "
                        >
                            <strong class="block text-sm font-extrabold">
                                Verifique os campos informados:
                            </strong>

                            <ul class="mt-2 list-inside list-disc text-sm">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    @yield('content')
                </main>
            </div>

            <div
                x-show="sidebarOpen"
                x-transition.opacity
                class="fixed inset-0 z-40 bg-zinc-950/60 lg:hidden"
                @click="sidebarOpen = false"
                style="display: none;"
            ></div>
        </div>

        @stack('scripts')
    </body>
</html>