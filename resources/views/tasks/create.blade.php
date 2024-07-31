@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
    <h1 class="bg-dark text-light py-2 text-center fw-bold">Criar Nova Tarefa</h1>
    <div class="col-5 text-center">
        <form action="{{ route('tasks.store') }}" class="border mt-5 p-3" method="POST">
            @csrf
            <div class="form-group">
                <label for="title" class="fw-semibold my-3">Título</label>
                <input type="text" name="title" id="title" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description" class="fw-semibold my-3">Descrição</label>
                <textarea name="description" id="description" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-success mt-4">Adicionar Tarefa</button>
        </form>
    </div>
</div>
@endsection
