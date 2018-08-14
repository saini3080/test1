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
    <li class="active">Dashboard</li>
</ul>
<!-- END BREADCRUMB --> 

<div class="page-content-wrap">

<!-- START WIDGETS -->                    
<div class="row">
	<div class="col-md-12">
		@if(count($users))
			<h2>Listing Users</h2>
			<div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<th>Name</th>
					<th>Email</th>
					<th>Role</th>
					<th>Action</th>
				</thead>
				<tbody>
					@foreach($users as $user)
						<tr>
							<td>{{$user->name}}</td>
							<td>{{$user->email}}</td>
							<td>
								@if($user->role == 1)
									Super admin
								@elseif($user->role == 2)
									Agent
								@else
									Buyer
								@endif
							</td>
							<td>
								<button>Edit</button>
								<button>Delete</button>
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			</div>
		@else
			<p>No users found here !</p>
		@endif

	</div>
</div>
<!-- END WIDGETS -->                    


</div>

@endsection

@section('scripts')

<script type="text/javascript">

</script>

@endsection