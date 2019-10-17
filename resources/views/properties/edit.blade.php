@extends('layouts.app')

@section('title')
    Add Property
@endsection

@section('content')

<h1 class="text-center py-5">Edit Property</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Edit Property</div>
                <div class="card-body">
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul class="list-group">
                            @foreach ($errors->all() as $error)
                                <li class="list-group-item">
                                    {{ $error }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <form action="/properties/{{ $property->id }}/update-property" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="property_name" placeholder="Property Name" value="{{ $property->property_name }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" value="{{ $property->address }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City" value="{{ $property->city }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="state" placeholder="State" value="{{ $property->state }}">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="zipcode" placeholder="zipcode" value="{{ $property->zipcode }}">
                        </div>
                        <div class="form-group justify-content-start pt-2">
                            <label for="completed">Completed</label>
                            <input type="checkbox" class="form-control" name="completed" label="completed" value="{{ $property->completed }}">
                        </div>
                        <div class="form-group">
                            <textarea name="comments" cols="15" rows="5" class="form-control" placeholder="Comments on Property" >{{ $property->comments }}</textarea>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-success bg-info" type="submit">Update Property</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection
