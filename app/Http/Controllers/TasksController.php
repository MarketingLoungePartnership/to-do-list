<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class TasksController extends Controller
{

    /**
     * Authenticates as first user as login system hasn't been implemented.
     */
    public function __construct(){
        if(!Auth::user()) Auth::login(User::find(1));
    }

    public function index(){
        return view('tasks');
    }
}
