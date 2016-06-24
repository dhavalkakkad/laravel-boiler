<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tasks;

class TasksController extends Controller
{
    public function index()
    {
     
          $tasks = Tasks::all();
          return view('tasks',compact('tasks'));
    } 

    public function detail($id)
    {

        $task = Tasks::findorFail($id);

        return view('task_detail',compact('task'));

    }
}
