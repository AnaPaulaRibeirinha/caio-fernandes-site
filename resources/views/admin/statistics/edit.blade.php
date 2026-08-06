@extends('layouts.admin')

@section('title', 'Novo indicador')
@section('page-title', 'Novo indicador')

@section('content')
    <div class="mb-8">
        <span
            class="
                text-xs font-extrabold uppercase
                tracking-[0.18em] text-green-700
            "
        >
            Indicadores
        </span>

        <h1
            class="
                mt-2 text-3xl font-black
                tracking-[-0.04em] text-zinc-950
            "
        >
            Cadastrar indicador
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Adicione um número ou resultado à faixa de destaque da Home.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.statistics.store') }}"
    >
        @csrf

        @include('admin.statistics._form')
    </form>
@endsection