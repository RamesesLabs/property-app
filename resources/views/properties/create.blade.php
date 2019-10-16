@extends('layouts.app')

@section('title')
    Add Property
@endsection

@section('content')

<h1 class="text-center py-5">Add Property</h1>

<div class="row justify-content-center">
    <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Add Property</div>
                <div class="card-body">
                    <form action="">
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
                            <textarea name="comments" cols="15" rows="5" class="form-control" placeholder="Comments on Property"></textarea>
                        </div>

                        <div class="form-group">
                            <button class="btn btn-success bg-info">Create Property</button>
                        </div>
                    </form>
                </div>
            </div>
    </div>
</div>

@endsection
