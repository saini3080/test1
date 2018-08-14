@extends('admin.layouts.app')

@section('content')

<div id="edit_profile">
  <ul class="breadcrumb">
      <li><a href="#">Home</a></li>                    
      <li class="active">Edit Profile</li>
  </ul>
  <div class="page-content-wrap">

    <div class="row">
      <div class="col-md-12">
        <h2>Profile</h2>
        @if(Session::has('flash_message_error'))    
            <div class="alert alert-danger alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_error') !!}</strong>
            </div>
        @endif 
        @if(Session::has('flash_message_success'))    
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">×</button> 
                    <strong>{!! session('flash_message_success') !!}</strong>
            </div>
        @endif 
      </div>
    </div>

    <div class="content-main-edit">
    	<div class="row well">
    		<div class="col-md-12">
          <div class="panel" style="float: initial;">
              <img class="pic img-circle" src="http://placehold.it/120x120" alt="...">
              <div class="name"><small>{{ $AdminDetails->name }}</small></div>
              <a href="#" class="btn btn-xs btn-primary pull-right" style="margin:10px;"><span class="glyphicon glyphicon-picture"></span> Change cover</a>
          </div>
          <br>
          <br>
          <br>
          <br>
          <form class="form-horizontal" method="post" action="{{ url('/admin/edit-profile') }}" name="basic_validate" id="edit-profile-form" novalidate="novalidate">{{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 control-label">User Name</label>
                <div class="col-sm-10">
                  <input type="text" disabled="disabled" name="name" class="form-control" id="name" value="{{ $AdminDetails->name }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                  <input type="email" name="email" class="form-control" id="email" value="{{ $AdminDetails->email }}">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Old Password</label>
                <div class="col-sm-10">
                  <input type="text" name="password" class="form-control" id="password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">New Password</label>
                <div class="col-sm-10">
                  <input type="text" name="new_password" class="form-control" id="new_password">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-10">
                  <input type="text" name="confirm_password" class="form-control" id="confirm_password">
                </div>
              </div>

              <div class="form-actions pull-right">
              <input type="submit" value="Update" class="btn btn-success">
              </div>
          </form>
        </div>
      </div>
    </div> 
  </div>
</div>

@endsection