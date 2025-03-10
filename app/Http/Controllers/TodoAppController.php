<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Inertia\Inertia;
use Illuminate\Support\Facades\Log;


class TodoAppController extends Controller
{
    //
    public function index(){
        return Inertia::render("Todoapp", [
            'tasks' => Task::all()
        ]);
    }
    
    public function store(Request $req, Task $task){
        Log::info($req);

        // $task = new Task();
        $task->content = $req->content;
        $task->save();

        return redirect()->route('todoapp');
    }

    public function destroy(Task $task){
        Log::info($task);
        $task->delete();

        return redirect()->route('todoapp');
    }

    public function update(Request $req, Task $task){
        // Log::info($task);
        // Log::info($req);
        
        $task->content = $req->content;
        $task->update();
        
    }
}
