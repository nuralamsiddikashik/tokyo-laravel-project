@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-6 offset-md-3 mt-4">
        <div class="card card-primary">
            <div class="card card-header">
                <div class="d-flex justify-content-between">
                    <h3 class="card-title text-uppercase">Create Service</h3>
                    <h3 class="card-title text-uppercase">
                        <a class="btn btn-info" href="#">Service list</a>
                    </h3>
                </div>
            </div>
            <form action="{{route('admin.service.store')}}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="service_title">Service Title</label>
                        <input class="form-control" type="text" name="service_title" id="service_title">
                    </div>
                    <div class="form-group">
                        <label for="service_icon">Service Icon</label>
                        <input class="form-control" type="text" name="service_icon" id="service_icon">
                    </div>
                    <div class="form-group">
                        <label for="service_description">Service Description</label>
                        <input class="form-control" type="text" name="service_description" id="service_description">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
