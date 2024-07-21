@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">About</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">About</li>
          </ol>
        </div>
      </div>
    </div>
  </div>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      @include('_message')
      <div class="row">
        <div class="col-md-12">
          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">About Page</h3>
            </div>
            <form action="{{ url('admin/about/post') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">About Image</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="aboutimage" class="form-control-file">
                    </div>
                    @if(@$getrecord1[0]->aboutimage)
                      <img src="{{ url('public/img/' . @$getrecord1[0]->aboutimage) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Your Name</label>
                  <div class="col-sm-10">
                    <input type="text" name="yourname" class="form-control" value="{{ @$getrecord1[0]->yourname }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">About</label>
                  <div class="col-sm-10">
                    <textarea name="aboutme" class="form-control" placeholder="Enter Your Description">{{ @$getrecord1[0]->aboutme }}</textarea>
                  </div>
                </div>
                <input type="hidden" name="id" value="{{ @$getrecord1[0]->id }}">
              </div>
              <div class="card-footer">
                <button type="submit" name="add_to_update" id="add_to_update" class="btn btn-info">
                  @if(count($getrecord1) > 0) Edit @else Add @endif
                </button>
                <a href="{{ url('admin/about') }}" class="btn btn-default float-right">Cancel</a>
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
}
</style>

@endsection
