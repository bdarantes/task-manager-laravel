<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|min:3|max:100',
            'description' => 'nullable|min:3',
        ]);

        Task::create($validated);

        return redirect()
            ->route('tasks.index')
            ->with('success', 'Tarefa criada com sucesso!');
    }
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }
    public function update(Request $request, Task $task) 
    {
        $task->update($request->only('title', 'description'));
        return redirect('/');
    } 
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect('/');
    }

}