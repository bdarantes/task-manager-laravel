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
<h2>Editar tarefa</h2>

@include('tasks._form', [
    'action' => route('tasks.update', $task->id),
    'method' => 'PUT',
    'task'=> $task

])

