@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Home</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Home</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @include('_message')
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Home Page</h3>
            </div>

            <form action="{{ url('admin/home/post') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Profile Image</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="profile" class="form-control-file">
                    </div>
                    @if(@$getrecord[0]->profile)
                      <img src="{{ url('public/img/' . @$getrecord[0]->profile) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <!-- Add other form fields here -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="your_name" class="form-control" value="{{ @$getrecord[0]->your_name }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Facebook</label>
                  <div class="col-sm-10">
                    <input type="text" name="facebook" class="form-control" value="{{ @$getrecord[0]->facebook }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Twitter</label>
                  <div class="col-sm-10">
                    <input type="text" name="twitter" class="form-control" value="{{ @$getrecord[0]->twitter }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Instagram</label>
                  <div class="col-sm-10">
                    <input type="text" name="instagram" class="form-control" value="{{ @$getrecord[0]->instagram }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">LinkedIn</label>
                  <div class="col-sm-10">
                    <input type="text" name="linkedin" class="form-control" value="{{ @$getrecord[0]->linkedin }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Whatsapp Link</label>
                  <div class="col-sm-10">
                    <input type="text" name="whatsapp" class="form-control" value="{{ @$getrecord[0]->whatsapp }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="description" class="form-control" placeholder="Enter Your Description">{{ @$getrecord[0]->description }}</textarea>
                  </div>
                </div>

                <input type="hidden" name="id" value="{{ @$getrecord[0]->id }}">
              
              </div>
              <div class="card-footer">
                <button type="submit" name="add_to_update" id="" class="btn btn-info" value="@if(count($getrecord)>0) Edit @else Add @endif">
                  @if(count($getrecord)>0) Edit @else Add @endif
                </button>
                <a href="" class="btn btn-default float-right">Cancel</a>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </section>
  
</div>

<!-- Add CSS for styling the file input -->
<style>
.file-input-wrapper {
  border: 1px solid #ced4da;
  padding: 0.5rem;
  border-radius: 0.25rem;
}

.file-input-wrapper input[type="file"] {
  border: none;
  padding: 0;
  background: transparent;
  width: 100%;
}
</style>

@endsection
