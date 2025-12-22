<h1>Tarefas</h1>

<form method="POST" action="/tasks">
    @csrf
    <input name="title" placeholder="Titulo">
    <textarea name="description"></textarea>
    <button>Adicionar</button>
</form>

<hr>

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