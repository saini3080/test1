@extends('admin.layouts.app')
@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Subsciption</li>
    </ul>
    <h1>Edit Subsciption</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Subsciption</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-subscription/'.$SubscriptionDetails->id) }}" name="basic_validate" id="edit_category" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Subsciption Name</label>
                <div class="controls">
                  <input type="text" name="subsciption_name" id="subsciption_name" value="{{ $SubscriptionDetails->name }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="subsciption_desc" id="subsciption_desc">{{ $SubscriptionDetails->description }}</textarea>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Price</label>
                <div class="controls">
                  <input type="text" name="subsciption_price" id="subsciption_price" value="{{ $SubscriptionDetails->price }}">&nbsp;<span id="errmsg"></span>
                </div>
              </div>
              <div class="control-group">
                <label class="control-label"> Duration (Year)</label>
                <div class="controls">
                  <select name="subsciption_duration" id="subsciption_duration">
                    <option {{ ($SubscriptionDetails->duration  == 1)?'selected="selected"' : ''}} value="1">1 </option>
                    <option {{ ($SubscriptionDetails->duration  == 2)?'selected="selected"' : ''}} value="2">2 </option>
                    <option {{ ($SubscriptionDetails->duration  == 3)?'selected="selected"' : ''}} value="3">3 </option>
                    <option {{ ($SubscriptionDetails->duration  == 4)?'selected="selected"' : ''}} value="4">4 </option>
                  </select>
                </div>
              </div>
              <div class="form-actions">
                <input type="submit" value="Add New Category" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection