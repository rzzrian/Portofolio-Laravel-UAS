@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Portfolio</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Portfolio</li>
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
              <h3 class="card-title">Portfolio Page</h3>
            </div>
            <form action="{{ url('admin/portfolio/post') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">

                <!-- Image 1 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 1</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image1" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image1)
                      <img src="{{ url('public/img/' . @$getrecord3->image1) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="category1" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category1 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 1 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description1" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description1 }}</textarea>
                  </div>
                </div>

                <!-- Image 2 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 2</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image2" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image2)
                      <img src="{{ url('public/img/' . @$getrecord3->image2) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 2</label>
                  <div class="col-sm-10">
                    <input type="text" name="category2" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category2 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 2 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description2" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description2 }}</textarea>
                  </div>
                </div>

                <!-- Image 3 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 3</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image3" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image3)
                      <img src="{{ url('public/img/' . @$getrecord3->image3) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 3</label>
                  <div class="col-sm-10">
                    <input type="text" name="category3" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category3 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 3 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description3" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description3 }}</textarea>
                  </div>
                </div>

                <!-- Image 4 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 4</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image4" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image4)
                      <img src="{{ url('public/img/' . @$getrecord3->image4) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 4</label>
                  <div class="col-sm-10">
                    <input type="text" name="category4" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category4 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 4 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description4" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description4 }}</textarea>
                  </div>
                </div>

                <!-- Image 5 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 5</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image5" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image5)
                      <img src="{{ url('public/img/' . @$getrecord3->image5) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 5</label>
                  <div class="col-sm-10">
                    <input type="text" name="category5" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category5 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 5 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description5" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description5 }}</textarea>
                  </div>
                </div>

                <!-- Image 6 -->
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Image 6</label>
                  <div class="col-sm-10">
                    <div class="file-input-wrapper">
                      <input type="file" name="image6" class="form-control-file">
                    </div>
                    @if(@$getrecord3->image6)
                      <img src="{{ url('public/img/' . @$getrecord3->image6) }}" width="200" height="200"/>
                    @endif
                  </div>
                </div>

                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 6</label>
                  <div class="col-sm-10">
                    <input type="text" name="category6" class="form-control" placeholder="Enter Your Category" value="{{ @$getrecord3->category6 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Category 6 Description</label>
                  <div class="col-sm-10">
                    <textarea name="description6" class="form-control" placeholder="Enter Your Description">{{ @$getrecord3->description6 }}</textarea>
                  </div>
                </div>

                <input type="hidden" name="id" value="{{ @$getrecord3->id }}">

              </div>
              <div class="card-footer">
                <button type="submit" name="add_to_update" id="add_to_update" class="btn btn-info">
                  Submit
                </button>
                <a href="{{ url('admin/portfolio') }}" class="btn btn-default float-right">Cancel</a>
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
