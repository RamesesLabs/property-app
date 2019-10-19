@extends('layouts.app')

@section('title')
    {{ $project->project_name }}
@endsection

@section('content')

    <h1 class="text-center my-5">
        {{ $project->project_name }}
      </h1>
      <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card text-center border-info mb-3 bg-light" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-header">{{ $project->project_name }}</h5>
                        <p class="card-text">{{ $project->comments }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $project->project_name }}</li>
                            <li class="list-group-item">{{ $project->address }}</li>
                            <li class="list-group-item">{{ $project->city }}, {{ $project->state }}</li>
                            <li class="list-group-item">{{ $project->zipcode }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/projects/{{ $project->id }}/edit" class="card-link btn btn-info btn-sm">Edit</a>
                            <a href="/projects/{{ $project->id }}/delete" class="card-link btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

