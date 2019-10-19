@extends('layouts.app')

@section('title')
    Add Project
@endsection

@section('content')

<h1 class="text-center py-5">Add Project</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Add Project</div>
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
                    <form action="/create-project" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="project_name" placeholder="Project Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="property_name" placeholder="Property Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="city" placeholder="City">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="state" placeholder="State">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="zipcode" placeholder="zipcode">
                        </div>
                        <div class="form-group justify-content-start pt-2">
                            <label for="completed">Completed</label>
                            <input type="checkbox" class="form-control" name="completed" label="completed">
                        </div>
                        <div class="form-group">
                            <textarea name="comments" cols="15" rows="5" class="form-control" placeholder="Comments on Project"></textarea>
                        </div>

                        <div class="form-group text-center">
                            <button class="btn btn-success bg-info" type="submit">Create Project</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection
