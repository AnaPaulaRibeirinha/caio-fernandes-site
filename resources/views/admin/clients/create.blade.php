@extends('layouts.admin')

@section('title', 'Novo cliente')
@section('page-title', 'Novo cliente')

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
            Cadastrar cliente
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Adicione uma empresa ou instituição ao carrossel de clientes.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.clients.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        @include('admin.clients._form')
    </form>
@endsection