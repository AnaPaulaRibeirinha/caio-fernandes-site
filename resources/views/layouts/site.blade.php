<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <meta
        name="description"
        content="@yield('meta_description', 'Consultoria e soluções ambientais.')"
    >

    <title>
        @yield('title', 'Caio Fernandes | Biólogo')
    </title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white text-zinc-900 antialiased">

    @include('components.header')

    <main>
        @yield('content')
    </main>

    @include('components.footer')
@stack('scripts')
</body>
</html>