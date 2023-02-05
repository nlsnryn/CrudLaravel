<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TodoListController extends Controller
{   
    public $task;

    function __construct() {
        $this->task = new Task;
    }

    function index() {
        $tasks = $this->task->getTaskList();
        return view('index', compact('tasks'));
    }

    function saveTask(Request $request){
        $data = [
        'name' => $request->taskname
        ];

        $this->task->saveTask($data);
        return back();
    }

    function deleteTask($id) {
        $this->task->deleteTask($id);
        return back();
    }
}
