@extends('layouts.admin')

@section('title', 'Editar publicação')
@section('page-title', 'Editar publicação')

@section('content')
    <div class="mb-8">
        <span
            class="
                text-xs font-extrabold uppercase
                tracking-[0.18em] text-green-700
            "
        >
            Clipping
        </span>

        <h1
            class="
                mt-2 text-3xl font-black
                tracking-[-0.04em] text-zinc-950
            "
        >
            Editar publicação
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Atualize as informações de {{ $clipping->title }}.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.clippings.update', $clipping) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        @include('admin.clippings._form')
    </form>
@endsection