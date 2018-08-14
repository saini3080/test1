@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Subsciption</li>
    </ul>
    <div class="page-content-wrap">

    <!-- START WIDGETS -->                    
    <div class="row">
      <div class="col-md-12">
        <h2>Listing Subsciption</h2>
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
        <table class="table table-bordered data-table">
          <thead>
            <tr>
              <th>Subsciption ID</th>
              <th>Subsciption Name</th>
              <th>Subsciption Description</th>
              <th>Subsciption Price</th>
              <th>Subsciption Agents</th>
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
              <td>{{ $subscript->agent }}</td>
              <td>{{ $subscript->duration }}</td>
              <td class="center">
                <a href="{{ url('/admin/edit-subscription/'. $subscript->id ) }}" class="btn btn-primary btn-mini">Edit</a> 
                <a id="delSub" href="{{ url('/admin/delete-subscription/'. $subscript->id ) }}" class="btn btn-danger btn-mini">Delete</a>
              </td>
            </tr>
            @endforeach
         </tbody>
        </table>
      </div>
    </div>
</div>


@endsection