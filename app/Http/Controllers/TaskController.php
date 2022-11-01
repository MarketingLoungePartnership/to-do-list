<?php

namespace App\Http\Controllers;

Use App\Models\Task;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class TaskController extends Controller
{
    /**
     * Display listing of tasks
     *
     * @return \Illuminate\Http\Response Main page
     */
    public function index()
    {
        $tasks = Task::all();

        return view('task.index', ['tasks' => $tasks]);
    }

    /**
     * Store newly created task in database
     *
     * @param  \Illuminate\Http\Request  $request Form data
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = new Task();
        $task->description =$request->input('description');
        $task->is_complete = 0;
        $task->save();

        return redirect()->route('task.index')
            ->with('message','Task created');
    }

    /**
     * Update the specified task in database
     *
     * @param  \App\Models\Task  $task The task being updated
     * @return \Illuminate\Http\Response View with success message
     */
    public function update(Request $request, Task $task)
    {
        //Validate form data using rules in model
        $validation = Validator::make($request->all(), Task::$rules);
        //If validation fails, redirect user back to form
        if ($validation->fails()) {
            return redirect()->route('task.index')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
        }

        $task->description = $request->description;
        $task->save();

        return redirect()->back()->with('message', 'Task updated');
    }

    /**
     * Remove the specified task from database
     *
     * @param  \App\Models\Task  $task The task being deleted
     * @return \Illuminate\Http\Response View with success message
     */
    public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->back()->with('message', 'Task deleted');
    }

    /**
     * Complete a task
     *
     * @param  \App\Models\Task  $task The task being completed
     * @return \Illuminate\Http\Response View with success message
     */
    public function complete(Task $task)
    {
        $task->is_complete = 1;
        $task->save();

        return redirect()->back()->with('message', 'Task completed');
    }
}
