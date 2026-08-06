@extends('layouts.admin')

@section('title', 'Novo projeto')
@section('page-title', 'Novo projeto')

@section('content')
    <div class="mb-8">
        <span
            class="
                text-xs font-extrabold uppercase
                tracking-[0.18em] text-green-700
            "
        >
            Projetos
        </span>

        <h1
            class="
                mt-2 text-3xl font-black
                tracking-[-0.04em] text-zinc-950
            "
        >
            Cadastrar projeto
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Adicione um trabalho ao portfólio do site.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.projects.store') }}"
        enctype="multipart/form-data"
    >
        @csrf

        @include('admin.projects._form')
    </form>
@endsection