<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectsController extends Controller
{
    public function index() {
        $projects = Project::all();
        return view('projects.index', ['projects' => $projects]);
    }

    public function store() {
        $attributes = request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $attributes['owner_id'] = auth()->user()->id;
        auth()->user()->projects()->create($attributes);

        Project::create($attributes);
        return redirect('/projects');
    }

    public function show(Project $project) {
        if(auth()->user()->isNot($project->owner)) return abort(403);
        return view('projects.show', ['project' => $project]);
    }

    public function create() {
        return view('projects.create');
    }
}
