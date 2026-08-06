@extends('layouts.admin')

@section('title', 'Editar indicador')
@section('page-title', 'Editar indicador')

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
            Editar indicador
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Atualize o indicador {{ $statistic->value }}.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.statistics.update', $statistic) }}"
    >
        @csrf
        @method('PUT')

        @include('admin.statistics._form')
    </form>
@endsection