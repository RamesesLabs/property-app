@extends('layouts.app')

@section('title')
    {{ $property->property_name }}
@endsection

@section('content')

    <h1 class="text-center my-5">
        {{ $property->property_name }}
      </h1>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="card card-default">
            <div class="card-header bg-info">
              Property Details
            </div>

            <div class="card-body">
              {{ $property->address }}
              <br>
              {{ $property->city }}, {{ $property->state }}
            </div>
          </div>
          <a href="/properties/{{ $property->id }}/edit" class="btn btn-info my-2">Edit</a>
          <a href="/properties/{{ $property->id }}/delete" class="btn btn-danger my-2">Delete</a>
        </div>
      </div>

@endsection
