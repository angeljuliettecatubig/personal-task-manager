<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Display all tasks
    public function index()
    {
        $tasks = Task::latest()->get();

        $totalTasks = Task::count();

        $pendingTasks = Task::where('status', 'Pending')->count();

        $completedTasks = Task::where('status', 'Completed')->count();

        return view('tasks.index', compact(
            'tasks',
            'totalTasks',
            'pendingTasks',
            'completedTasks'
        ));
    }

    // Show the form for creating a new task
    public function create()
    {
        return view('tasks.create');
    }

    // Save a new task
    public function store(Request $request)
    {
        $validated = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        Task::create($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Task added successfully!');
    }

    // Show the form for editing a task
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    // Update an existing task
    public function update(Request $request, Task $task)
    {
        $validated = $request->validate([
            'task_name' => 'required|max:255',
            'description' => 'nullable',
            'status' => 'required|in:Pending,Completed',
            'due_date' => 'nullable|date',
        ]);

        $task->update($validated);

        return redirect()->route('tasks.index')
            ->with('success', 'Task updated successfully!');
    }

    // Delete a task
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index')
            ->with('success', 'Task deleted successfully!');
    }
}