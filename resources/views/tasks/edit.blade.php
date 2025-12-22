<h1>Editar tarefa</h1>

<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')

    <input name="title" value="{{ $task->title }}">
    <textarea name="description">{{ $task->description }}</textarea>

    <button>Salvar</button>
</form>