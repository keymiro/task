<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view(
            'task.index',
            [
                'tasks' => $tasks,
            ]
        );

        return view('task.index')->with(compact('task'));
    }

    public function create()
    {
        return view('task.create');
    }

    public function store(Request $request)
    {
        $task = Task::create([
            'name' => $request->name,
            'description' => $request->description,
            'start' => $request->start,
            'end' => $request->end,
            'user_id' => Auth()->user()->id,
        ]);

        if ($task) {
            return back()->with('success', 'Registro guardado correctamente');
        }
        return back()->with('error', 'Ha ocurrido un error!');
    }

    public function edit(Task $task)
    {
        return view('task.edit', ['task' => $task]);
    }

    public function update(Request $request, Task $task)
    {
       $task = Task::findOrfail($task->id);

        $result = $task->update([
            'name' => $request->name,
            'description' => $request->description,
            'start' => $request->start,
            'end' => $request->end,
            'user_id' => Auth()->user()->id,
        ]);

       if ($result) {
            return back()->with('success', 'Registro actualizado correctamente');
        }
        return back()->with('error', 'Ha ocurrido un error!');
    }

    public function destroy(Task $task)
    {
        $task = Task::findOrfail($task->id);
        $result = $task->delete();

        if ($result) {
            return back()->with('success', 'Registro eliminado correctamente');
        }
        return back()->with('error', 'Ha ocurrido un error!');
    }

}
