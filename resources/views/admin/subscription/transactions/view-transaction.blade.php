@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Trasactions</li>
    </ul>
    <div class="page-content-wrap">

    <!-- START WIDGETS -->                    
    <div class="row">
      <div class="col-md-12">
        <h2>Listing Trasactions</h2>
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
              <th>Trasactions ID</th>
              <th>Trasactions Uid</th>
              <th>Trasactions Amount</th>
              <th>Payment Status</th>
              <th>Trasactions Start</th>
              <th>Trasactions Expiry</th>
              <th>Actions</th>
            </tr>
          </thead>
          <tbody>
            @foreach( $Trasactions as $trans )
            <tr class="gradeX">
              <td>{{ $trans->id }}</td>
              <td>{{ $trans->user_id }}</td>
              <td>{{ $trans->amount_paid }}</td>
              <td>{{ $trans->payment_status }}</td>
              <td>{{ $trans->plan_start }}</td>
              <td>{{ $trans->plan_expiry }}</td>
              <td class="center">
                 <a href="{{ url('/admin/view-transaction-one/'. $trans->id ) }}" class="btn btn-primary btn-mini">View</a> 
              </td>
            </tr>
            @endforeach
         </tbody>
        </table>
      </div>
    </div>
</div>


@endsection