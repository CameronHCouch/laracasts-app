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

    public function show(Project $project)
    {
        return view('projects.show', compact('project'));
    }

    public function create()
    {
        return view('projects.create');
    }

    public function store()
    {
        /*
        note: there is a much more succinct way of doing this
        also: this method does not yet handle validations & errors
        $project = new Project();

        $project->title = request('title');
        $project->description = request('description');
        $project->save();
        */

        /* more succint than manually creating
        Project::create([
            'title' => request('title'),
            'description' => request('description')
        ]);
        */

        # and now, even more succinctly

        $attributes = request()->validate([
            'title' => ['required', 'min:3', 'max:255' ],
            'description' => ['required', 'min:10']
        ]);

        Project::create($attributes);
        return redirect('/projects');
    }

    public function edit(Project $project)
    {
        return view('projects.edit', compact('project'));
    }

    public function update(Project $project)
    {
        // $project->title = request('title');
        // $project->description = request('description');
        // $project->save();

        $project->update(request(['title', 'description']));
        return redirect('/projects');
    }

    public function destroy(Project $project)
    {
        $project->delete();
        return redirect('/projects');

    }
}
