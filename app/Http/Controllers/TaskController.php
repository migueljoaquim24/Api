<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Validation\ValidationException;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return response()->json($tasks);
    }

    public function show(Task $task)
    {
        return response()->json($task);
    }

    public function store(Request $request)
    {
        $this->validateTask($request);

        $task = Task::create($request->all());

        return response()->json($task, Response::HTTP_CREATED);
    }

    public function update(Request $request, Task $task)
    {
        $this->validateTask($request);

        $task->update($request->all());

        return response()->json($task);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json(null, Response::HTTP_NO_CONTENT);
    }

    protected function validateTask(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'completed' => 'boolean'
        ]);
    }
}
