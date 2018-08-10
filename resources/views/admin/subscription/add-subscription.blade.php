@extends('admin.layouts.app')

@section('content')

<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="{{ url('/admin') }}" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a><a href="#" class="current">Subsciption</a> </div>
    <h1>Add New Subsciption</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Subsciption</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/add-subscription') }}" name="basic_validate" id="add_subsciption" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label"> Name</label>
                <div class="controls">
                  <input type="text" name="subsciption_name" id="subsciption_name">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Description</label>
                <div class="controls">
                  <textarea type="text" name="subsciption_desc" id="subsciption_desc"></textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Price</label>
                <div class="controls">
                  <input type="text" name="subsciption_price" id="subsciption_price">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Duration (Year)</label>
                <div class="controls">
                	<select name="subsciption_duration" id="subsciption_duration">
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