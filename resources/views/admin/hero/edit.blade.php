@extends('layouts.admin')
@section('content')
<div class="row">
    <!-- left column -->
    <div class="col-md-6 offset-md-3 mt-4">
      <!-- jquery validation -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Home Hero Section</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{route('admin.hero.update')}}" method="POST" enctype="multipart/form-data">
          @csrf
          <div class="card-body">
            <div class="form-group">
              <label for="title">Hero Title</label>
              <input type="title" name="title" value="{{$hero->title}}" class="form-control" id="title" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="description">Description</label>
              <input type="text" name="description" value="{{$hero->description}}" class="form-control" id="description" placeholder="Description">
            </div>
            <div class="form-group">
              <div class="row">
                  <div class="col-8">
                      <label for="image">Site Logo</label>
                      <div class="custom-file">
                          <input type="file" name="image" class="custom-file-input" id="image">
                          <label class="custom-file-label" for="image">Choose file</label>
                      </div>
                  </div>
                  <div class="col-4 text-right">
                      <div style="max-width: 100px; max-height: 100px;overflow:hidden; margin-left: auto">
                          <img src="{{ asset($hero->image) }}" class="img-fluid" alt="">
                      </div>
                  </div>
              </div>
          </div>
          </div>
          <!-- /.card-body -->
          <div class="card-footer">
            <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
      </div>
      <!-- /.card -->
      </div>
    <!--/.col (left) -->
    <!-- right column -->
   
    <!--/.col (right) -->
  </div>
@endsection