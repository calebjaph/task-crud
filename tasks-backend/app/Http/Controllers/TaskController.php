<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index() {
        // Get All Task
        $getAll = Task::orderBy('isDone', 'ASC')->orderBy('id', 'desc')->get();
        return $getAll;

    }

    public function store(Request $request) {
        // Store Task

        $task = new Task();

        $task->taskName = $request->taskName;
        $task->priority = $request->priority;
        $task->tag = $request->tag;
        $task->description = $request->description;
        $task->isDone = false;

        $task->save();

        return $task;
    }

    public function update(Request $request, $id) {
        // Update Task

        $editTask = Task::findOrFail($request->id);
        $editTask->taskName = $request->taskName;
        $editTask->priority = $request->priority;
        $editTask->tag = $request->tag;
        $editTask->description = $request->description;
        $editTask->isDone = false;

        $editTask->save();

        return $editTask;
    }

    public function getTask(Request $request, $id) {
            
        // Get Single Task

        $getTask = Task::where('id', '=', $id)->get();
        return $getTask;
    }

    public function completeTask(Request $request, $id) {
        // Complete Task

        $completeTask = Task::findOrFail($request->id);
        $completeTask->isDone = true;

        $completeTask->save();

        return $completeTask;
    }

    public function destroy(Request $request) {
        // Delete Task

        $deleteTask = Task::destroy($request->id);
        return $deleteTask;
    }
}
