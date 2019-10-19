<?php

namespace App\Http\Controllers;

use App\Project;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index() {

        return view('projects.index')->with('projects', Project::all());

    }

    public function show(Project $project) {

        return view('projects.show')->with('project', $project);
    }

    public function create() {
        return view('projects.create');
    }

    public function store() {

        $this->validate(request(), [
            'project_name' => 'required|min:6|max:50',
            'project_name' => 'required|min:6|max:50',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
            'zipcode' => 'required',
            'comments' => 'required'
        ]);

        $data = request()->all();

        $project = new Project();
        $project->project_name = $data['project_name'];
        $project->property_name = $data['property_name'];
        $project->address = $data['address'];
        $project->city = $data['city'];
        $project->state = $data['state'];
        $project->zipcode = $data['zipcode'];
        $project->completed = false;
        $project->comments = $data['comments'];

        $project->save();

        session()->flash('success', 'Project created successfully.');

        return redirect('/projects');
    }

    public function edit(Project $project) {

        return view('projects.edit')->with('project', $project);
    }

    public function update(Project $project) {
        $this->validate(request(), [
            'project_name' => 'required|min:6|max:50',
            'completed' => 'required',
            'comments' => 'required'
        ]);

        $data = request()->all();

        $project->project_name = $data['project_name'];
        $project->address = $data['address'];
        $project->city = $data['city'];
        $project->state = $data['state'];
        $project->zipcode = $data['zipcode'];
        $project->completed = $data['completed'];
        $project->comments = $data['comments'];

        $project->save();

        session()->flash('success', 'Project edited successfully.');

        return redirect('/projects');

    }

    public function destroy(Project $project)
    {
      $project->delete();

      session()->flash('success', 'Project deleted successfully.');

      return redirect('/projects');
    }

    public function complete(Project $project)
    {
      $project->completed = true;
      $project->save();
      session()->flash('success', 'Project completed successfully.');
      return redirect('/projects');
    }
}
