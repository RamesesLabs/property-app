<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        return view('projects.index')->with('projects', Project::all());

    }

    public function show($projectId) {

        return view('projects.show')->with('project', Project::find($projectId));
    }


}
