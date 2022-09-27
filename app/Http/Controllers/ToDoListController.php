<?php

namespace App\Http\Controllers;

use App\Models\ToDoList;
use Illuminate\Http\Request;

class ToDoListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $todolist =  ToDoList::all();
       return view('tasks', ['todolist' => $todolist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // we do not need a view in this scenario
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // use the request file
        $validatedData = $request->validate([
            'description' => ['required', 'max:255']
        ]);

        /* ToDoList::create([
            'description' => $request->input('description')
        ]); */
        
        $task = new ToDoList();
        $task->setDescription($request->input('description'));       
        $task->setStatus(0);
        $task->save();
    
        return redirect()->route('to-do-list.index')->with('success','Task created successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function show(ToDoList $toDoList)
    {
        // We do not need a seperate view for each task
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,ToDoList $toDoList)
    {
        // we do not need a view to update record
        // therefore instead of using update CRUD function, 
        // we can still update the record here as well

        $task = ToDoList::find($toDoList->id);
        $task->setStatus(1);
        $task->save();
     
        return redirect()->route('to-do-list.index')->with('success','Task marked as completed');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ToDoList $toDoList)
    {
        //        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ToDoList  $toDoList
     * @return \Illuminate\Http\Response
     */
    public function destroy(ToDoList $toDoList)
    {
        $toDoList->delete();
        return redirect()->route('to-do-list.index')->with('success','Task is removed');
    }
}
