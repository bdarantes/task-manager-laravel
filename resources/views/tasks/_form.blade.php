<form action="{{ $action }}" method="POST">
    @csrf

    @isset($method)
        @method($method)
    @endisset

    <div>
        <label>Título</label><br>
        <input
            type="text"
            name="title"
            value="{{ old('title', $task->title ?? '') }}"
            required
        >
    </div>

    <div>
        <label>Descrição</label><br>
        <textarea name="description">{{ old('description', $task->description ?? '') }}</textarea>
    </div>

    <br>

    <button type="submit">Salvar</button>

</form>