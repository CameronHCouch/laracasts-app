<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        
        return view('projects.index', compact('projects'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        // note: there is a much more succinct way of doing this
        // also: this method does not yet handle validations & errors
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');
        $project->save();

        return redirect('/projects');
    }
}
