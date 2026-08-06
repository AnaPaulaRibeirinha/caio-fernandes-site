@extends('layouts.admin')

@section('title', 'Novo serviço')
@section('page-title', 'Novo serviço')

@section('content')
    <div class="mb-8">
        <span
            class="
                text-xs font-extrabold uppercase
                tracking-[0.18em] text-green-700
            "
        >
            Serviços
        </span>

        <h1
            class="
                mt-2 text-3xl font-black
                tracking-[-0.04em] text-zinc-950
            "
        >
            Cadastrar serviço
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Adicione um novo serviço ao site.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.services.store') }}"
    >
        @csrf

        @include('admin.services._form')
    </form>
@endsection