@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')



<h2>Nova Tarefa</h2>

<form action="{{ route('tasks.store') }}"method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" required>
    <br><br>

    <textarea name="description" placeholder="Descrição"></textarea>
    <br><br>

    <button type="submit">Salvar</button>
</form>

<hr>

<h2>Minhas Tarefas</h2>

@if ($tasks->isEmpty())
    <p>Nenhuma tarefa cadastrada.</p>
@else
    @foreach ($tasks as $task)
        <div style="margin-bottom: 15px;">
            <h4>{{ $task->title }}</h4>
            <p>{{ $task->description }}</p>

            <a href="/tasks/{{ $task->id }}/edit">Editar</a>

            <form method="POST" action="/tasks/{{ $task->id }}" style="display:inline">
                @csrf
                @method('DELETE')
                <button>Excluir</button>
            </form>
        </div>
    @endforeach
@endif
@endsection