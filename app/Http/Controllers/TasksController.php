<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Models\{
    User,
    Task
};

class TasksController extends Controller
{

    /**
     * Authenticates as first user as login system hasn't been implemented.
     */
    public function __construct(){
        if(!Auth::user()) Auth::login(User::find(1));
    }

    /**
     * Shows index
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(){
        $user = Auth::user();
        $tasks = $user->tasks;
        return view('tasks', compact('tasks'));
    }
}
