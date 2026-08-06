@extends('layouts.admin')

@section('title', 'Nova publicação')
@section('page-title', 'Nova publicação')

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
            Cadastrar publicação
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Adicione uma notícia, entrevista, artigo ou participação na
            imprensa.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.clippings.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        @include('admin.clippings._form')
    </form>
@endsection