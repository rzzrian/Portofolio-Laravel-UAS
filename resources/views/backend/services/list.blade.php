@extends('backend.layouts.app')

@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Services</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="{{ url('admin/dashboard') }}">Dashboard</a></li>
            <li class="breadcrumb-item active">Services</li>
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
              <h3 class="card-title">Services Page</h3>
            </div>
            <form action="{{ url('admin/services/post') }}" class="form-horizontal" method="post" enctype="multipart/form-data">
              {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Skill 1</label>
                  <div class="col-sm-10">
                    <input type="text" name="skill1" class="form-control" value="{{ @$getrecord2[0]->skill1 }}">
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2 col-form-label">Skill 1 Description</label>
                  <div class="col-sm-10">
                    <textarea name="skill1desc" class="form-control" placeholder="Enter Your Description">{{ @$getrecord2[0]->skill1desc }}</textarea>
                  </div>
                </div>
                <input type="hidden" name="id" value="{{ @$getrecord2[0]->id }}">
              
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Skill 2</label>
                    <div class="col-sm-10">
                      <input type="text" name="skill2" class="form-control" value="{{ @$getrecord2[0]->skill2 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Skill 2 Description</label>
                    <div class="col-sm-10">
                      <textarea name="skill2desc" class="form-control" placeholder="Enter Your Description">{{ @$getrecord2[0]->skill2desc }}</textarea>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Skill 3</label>
                    <div class="col-sm-10">
                      <input type="text" name="skill3" class="form-control" value="{{ @$getrecord2[0]->skill3 }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Skill 3 Description</label>
                    <div class="col-sm-10">
                      <textarea name="skill3desc" class="form-control" placeholder="Enter Your Description">{{ @$getrecord2[0]->skill3desc }}</textarea>
                    </div>
                  </div>
                </div>
              <div class="card-footer">
              <button type="submit" name="add_to_update" id="add_to_update" class="btn btn-info">
                  @if(count($getrecord2) > 0) Edit @else Add @endif
                </button>
                <a href="{{ url('admin/services') }}" class="btn btn-default float-right">Cancel</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
