@extends('layouts.app')

@section('title', 'Lista de Tarefas')

@section('content')



<h2>Nova Tarefa</h2>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
            <li style="color:red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('tasks.store') }}"method="POST">
    @csrf
    <input type="text" name="title" placeholder="Título" required value="{{ old('title') }}">
    <br><br>

    <textarea name="description" placeholder="Descrição">{{ old('description') }}</textarea>
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

            <form 
                action="{{ route('tasks.destroy', $task->id) }}"
                method="POST"
                onsubmit="return confirm('tem certeza que deseja excluir essa tarefa?')"
            
            >
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </div>
    @endforeach
@endif
@endsection