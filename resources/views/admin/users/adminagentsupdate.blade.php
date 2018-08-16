@extends('admin.layouts.app')

@section('content')

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<!-- START WIDGETS -->                    
<div class="row">
    <div class="col-md-12">
        <div class="panel panel-default">
            <div class="panel-heading">Create User</div>
            <div class="panel-body">

            <form  action='{{ url("admin/adminagents/{$user->id}/update") }}'' class="form-horizontal" method="post" role="form">
                {{ csrf_field() }}

                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="uname" class="form-control" value="{{ old('uname',$user->name ) }}" placeholder="Name"/>
                        @if ($errors->has('uname'))
                            <span class="help-block">
                                <strong>{{ $errors->first('uname') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="text" name="email" class="form-control" value="{{ old('email',$user->email ) }}" placeholder="Email"/>
                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <select type="text" name="role" class="form-control">
                            <option value="2" @if(old("role",$user->role) == "2") selected="selected" @endif >Admin Agent</option>
                            <option value="3" @if(old("role",$user->role) == "3") selected="selected" @endif >Simple Agent</option>
                            <option value="4" @if(old("role",$user->role) !== "2" && old("role",$user->role) !== "3") selected="selected" @endif >Simple Agent</option>
                        </select>
                        @if ($errors->has('role'))
                            <span class="help-block">
                                <strong>{{ $errors->first('role') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="password" class="form-control" placeholder="Password"/>
                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-12">
                        <input type="password" name="cpassword" class="form-control" placeholder="Confirm Password"/>
                        @if ($errors->has('cpassword'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cpassword') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-md-6">
                        <button class="btn btn-info btn-block">Create</button>
                    </div>
                    <div class="col-md-6">
                        <a href="{{ url('admin/adminagents') }}"><button type="button" class="btn btn-primary btn-block">Cancel</button></a>
                    </div>
                </div>
            </form>
        </div>
        </div>
    </div>
</div>
<!-- END WIDGETS -->                    


</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection