@extends('layouts.admin')

@section('title', 'Editar projeto')
@section('page-title', 'Editar projeto')

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
            Editar projeto
        </h1>

        <p class="mt-2 text-sm text-zinc-500">
            Atualize as informações de {{ $project->title }}.
        </p>
    </div>

    <form
        method="POST"
        action="{{ route('admin.projects.update', $project) }}"
        enctype="multipart/form-data"
    >
        @csrf
        @method('PUT')

        @include('admin.projects._form')
    </form>
@endsection