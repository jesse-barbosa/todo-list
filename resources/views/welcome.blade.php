@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
<h1 class="text-center bg-dark text-light py-2 fw-bold">Lista de Tarefas</h1>
    <div class="col-5 mt-5 text-center">
        <ul class="list-group">
            @foreach($tasks as $task)
                <a href="{{ route('tasks.show', $task->id) }}" class="link link-dark link-underline link-underline-opacity-0">
                    <li class="list-group-item py-3 fw-semibold">
                        {{ $task->title }}z
                    </li>
                </a>
            @endforeach
        </ul>
        <a href="{{ route('tasks.create') }}" class="btn btn-success mt-4">Adicionar Nova Tarefa</a>
    </div>
</div>
@endsection
