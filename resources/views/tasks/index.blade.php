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

@include('tasks._form', [
    'action' => route('tasks.store')
])

<hr>

<h2>Minhas tarefas</h2>

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
                style="display:inline"
                onsubmit="return confirm('Tem certeza que deseja excluir essa tarefa?')"
            >
         
                @csrf
                @method('DELETE')
                <button type="submit">Excluir</button>
            </form>
        </div>
    @endforeach
@endif

@endsection