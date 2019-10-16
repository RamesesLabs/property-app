@extends('layouts.app')

@section('title')
    {{ $project->project_name }}
@endsection

@section('content')

    <h1 class="text-center my-5">
        {{ $project->project_name }}
      </h1>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-default">
            <div class="card-header bg-info">
              Project Details
            </div>

            <div class="card-body">
              {{ $project->address }}
              <br>
              {{ $project->city }}, {{ $project->state }}
            </div>
          </div>
          <a href="/properties/{{ $project->id }}/edit" class="btn btn-info my-2">Edit</a>
          <a href="/properties/{{ $project->id }}/delete" class="btn btn-danger my-2">Delete</a>
        </div>
      </div>

@endsection
