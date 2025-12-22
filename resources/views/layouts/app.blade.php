<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Task Manager')</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>

    <header>
        <h1>Task Manager</h1>
        <nav>
            <a href="{{ route('tasks.index') }}"></a>
        </nav>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <small>Projeto de estudo com Laravel</small>
    </footer>
    
</body>
</html>