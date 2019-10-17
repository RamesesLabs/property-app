@extends('layouts.app')

@section('title')
    {{ $property->property_name }}
@endsection

@section('content')

    <h1 class="text-center my-5">
        {{ $property->property_name }}
      </h1>
      <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="card" style="width: 20rem;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $property->property_name }}</h5>
                        <p class="card-text">{{ $property->comments }}</p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $property->address }}</li>
                            <li class="list-group-item">{{ $property->city }}, {{ $property->state }}</li>
                            <li class="list-group-item">{{ $property->zipcode }}</li>
                        </ul>
                        <div class="card-body">
                            <a href="/properties/{{ $property->id }}/edit" class="card-link btn btn-info btn-sm">Edit</a>
                            <a href="/properties/{{ $property->id }}/delete" class="card-link btn btn-danger btn-sm">Delete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

