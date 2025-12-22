<h1>Tarefas</h1>

@foreach ($tasks as $task)
    <p>{{ $task->title }}</p>
@endforeach