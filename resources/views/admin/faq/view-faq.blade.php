@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">FAQ</li>
    </ul>
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
                  <th>Faq ID</th>
                  <th>Faq Name</th>
                  <th>Faq Description</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach( $Faq as $fqq )
                <tr class="gradeX">
                  <td>{{ $fqq->id }}</td>
                  <td>{{ $fqq->name }}</td>
                  <td>{{ $fqq->description }}</td>
                  <td class="center">
                  	<a href="{{ url('/admin/edit-faq/'. $fqq->id ) }}" class="btn btn-primary btn-mini">Edit</a> 
                  	<a id="delFaq" href="{{ url('/admin/delete-faq/'. $fqq->id ) }}" class="btn btn-danger btn-mini">Delete</a>
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