@extends('admin.layouts.app')
@section('content')

<div id="content">
  <div id="content-header">
    <ul class="breadcrumb">
        <li><a href="{{ url('/admin') }}">Home</a></li>                    
        <li class="active">Faq</li>
    </ul>
    <h1>Edit Faq</h1>
  </div>
  <div class="container-fluid"><hr>
    <div class="row-fluid">
      <div class="span12">
        <div class="widget-box">
          <div class="widget-title"> <span class="icon"> <i class="icon-info-sign"></i> </span>
            <h5>Faq</h5>
          </div>
          <div class="widget-content nopadding">
            <form class="form-horizontal" method="post" action="{{ url('/admin/edit-faq/'.$FaqDetails->id) }}" name="basic_validate" id="add_faq" novalidate="novalidate">{{ csrf_field() }}
              <div class="control-group">
                <label class="control-label">Faq Name</label>
                <div class="controls">
                  <input type="text" name="faq_name" id="faq_name" value="{{ $FaqDetails->name }}">
                </div>
              </div>
              <div class="control-group">
                <label class="control-label">Description</label>
                <div class="controls">
                  <textarea type="text" name="faq_desc" id="faq_desc">{{ $FaqDetails->description }}</textarea>
                </div>
              </div>
              
              <div class="form-actions">
                <input type="submit" value="Add New Faq" class="btn btn-success">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection