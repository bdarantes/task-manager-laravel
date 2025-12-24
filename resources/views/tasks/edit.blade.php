@if ($errors->any())
    <div>
        <strong>Erro ao atualizar:</strong>
        <ul>
            @foreach ($errors->all() as $error )
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <hr>
@endif
<h1>Editar tarefa</h1>

<form method="POST" action="/tasks/{{ $task->id }}">
    @csrf
    @method('PUT')

    <input type="text" name="title" value="{{ old('title', $task->title) }}" required>
    <textarea name="description">{{ old('description', $task->description) }}</textarea>

    <button>Salvar</button>
</form>