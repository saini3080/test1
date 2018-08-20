@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Subsciption</li>
    </ul>
    <h1>Add New Subsciption</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="col-md-12">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Subsciption</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-subscription') }}" name="basic_validate" id="add_subsciption" novalidate="novalidate">{{ csrf_field() }}
              <div class="form-group row">
                <label class="col-sm-2 control-label"> Name</label>
                <div class="col-sm-10">
                  <input type="text" name="subsciption_name" id="subsciption_name"  class="form-control">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label"> Description</label>
                <div class="col-sm-10">
                  <textarea type="text" name="subsciption_desc" id="subsciption_desc" class="form-control"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label"> Price</label>
                <div class="col-sm-10">
                  <input type="text" name="subsciption_price" id="subsciption_price" class="form-control"><p id="errmsg"></p>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label"> Agent</label>
                <div class="col-sm-10">
                  <input type="text" name="subsciption_agent" id="subsciption_agent" class="form-control"><p id="errmsg1"></p>
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 control-label"> Duration (Month)</label>
                <div class="col-sm-10">
                	<select name="subsciption_duration" id="subsciption_duration" class="form-control">
                		<option value="1">1 </option>
                		<option value="2">2 </option>
                		<option value="3">3 </option>
                		<option value="4">4 </option>
                	</select>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add New Subsciption" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection