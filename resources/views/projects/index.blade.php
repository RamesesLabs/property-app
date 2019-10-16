@extends('layouts.app')

@section('title')
    List Projects
@endsection

@section('content')

<h1 class="text-center my-5">Projects Page</h1>
        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card card-default">
              <div class="card-header bg-info">
                Projects
              </div>

              <div class="card-body">
                <ul class="list-group">
                  @foreach($projects as $project)
                    <li class="list-group-item">
                      {{ $project->project_name }}

                      @if(!$project->completed)
                        <a href="/projects/{{ $project->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
                      @endif
                      <a href="/projects/{{ $project->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

@endsection
