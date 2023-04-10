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
}
