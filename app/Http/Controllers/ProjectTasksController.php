<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

use Illuminate\Http\Request;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attribute = request()->validate(['description' => 'required']);
        $project->addTask($attribute);
        return back();
    }

    public function update(Task $task)
    {
        request()->has('completed') ? $task->complete() : $task->incomplete();
        return back();
    }
}
