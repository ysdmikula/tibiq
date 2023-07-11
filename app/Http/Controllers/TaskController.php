<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskRequest;
use App\Models\Task;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("index", ["tasks" => Task::all()]);
    }

    public function create()
    {
        return view("task.createForm");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TaskRequest $request)
    {
        // dd(Task::where("date", $formFields["date"])->count());

        Task::create([
            "name" => $request->name,
            "description" => $request->description,
            "date" => $request->date
        ]);

        return redirect("/")->with("flash", "Task created successfully");


    }

    /**
     * Display the specified resource.
     */
    public function edit(Task $task)
    {
        return view("task.editForm", ["task" => $task]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TaskRequest $request, Task $task)
    {
        // dd(Task::where("date", $formFields["date"])->count());

        $task->update([
            "name" => $request->name,
            "description" => $request->description,
            "date" => $request->date
        ]);

        return redirect("/")->with("flash", "Task edited successfully");

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
       $task->delete();

       return redirect("/")->with("flash", "Task removed successfully");
    }
}
