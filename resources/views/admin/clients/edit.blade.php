@extends('layouts.admin')

@section('title', 'Editar cliente')
@section('page-title', 'Editar cliente')

@section('content')
    <div class="mb-8">
        <span
            class="
                text-xs font-extrabold uppercase
                tracking-[0.18em] text-green-700
            "
        >
            Clientes
        </span>

        <h1
            class="
                mt-2 text-3xl font-black
                tracking-[-0.04em] text-zinc-950
            "
        >
            Editar {{ $client->name }}
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Atualize a logo e as informações do cliente.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.clients.update', $client) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        @include('admin.clients._form')
    </form>
@endsection