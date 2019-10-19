@extends('layouts.app')

@section('title')
    List Properties
@endsection

@section('content')

<h1 class="text-center my-3">Properties Page</h1>

    <div class="text-center my-3 pb-3">
        <a href="/new-property" class="nav-link"><button type="button" class="btn btn-primary btn-lg">Add Property</button></a>
    </div>

        <div class="row justify-content-center">
          <div class="col-md-8">
            <div class="card card-default">
              <div class="card-header bg-info">
                Properties
              </div>
              <div class="card-body">
                <ul class="list-group">
                  @foreach($properties as $property)
                    <li class="list-group-item">
                      {{ $property->property_name }}

                      @if(!$property->completed)
                      <a href="/properties/{{ $property->id }}/complete" style="color: white;" class="btn btn-warning btn-sm float-right">Complete</a>
                    @endif
                    <a href="/properties/{{ $property->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                      <a href="/properties/{{ $property->id }}" class="btn btn-primary btn-sm float-right mr-2">View</a>
                    </li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        </div>

@endsection
