@extends('admin.layouts.app')

@section('content')
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Admin part
                </div>
            </div>
        </div>
    </div>
</div> -->

<!-- START BREADCRUMB -->
<ul class="breadcrumb">
    <li><a href="#">Home</a></li>                    
    <li class="active">users</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">
	<div class="row">
		<div class="col-md-12">
			<p>User Name : {{ $user->name }}</p>
			<p>User Email : {{ $user->email }}</p>
			<p>User Role : {{ $user->role }}</p>
		</div>
	</div>
</div>

@endsection

@section('scripts')
	<script type="text/javascript">

	</script>
@endsection