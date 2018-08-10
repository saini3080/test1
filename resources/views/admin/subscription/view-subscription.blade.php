@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="#" class="current">All Subsciptions</a> </div>
    <h1>Subsciptions</h1>
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
  <div class="container-fluid">
    <hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
            <h5>Data table</h5>
          </div>
          <div class="widget-content nopadding">
            <table class="table table-bordered data-table">
              <thead>
                <tr>
                  <th>Subsciption ID</th>
                  <th>Subsciption Name</th>
                  <th>Subsciption Description</th>
                  <th>Subsciption Price</th>
                  <th>Subsciption Duration</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach( $Subscription as $subscript )
                <tr class="gradeX">
                  <td>{{ $subscript->id }}</td>
                  <td>{{ $subscript->name }}</td>
                  <td>{{ $subscript->description }}</td>
                  <td>{{ $subscript->price }}</td>
                  <td>{{ $subscript->duration }}</td>
                  <td class="center">
                  	<a href="{{ url('/admin/edit-subscription/'. $subscript->id ) }}" class="btn btn-primary btn-mini">Edit</a> 
                  	<a id="delCat" href="{{ url('/admin/delete-subscription/'. $subscript->id ) }}" class="btn btn-danger btn-mini">Delete</a>
                  </td>
                </tr>
                @endforeach
         	   </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection