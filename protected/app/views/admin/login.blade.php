@extends('admin.layouts.master')
@section('content')
<div class="page-header">
	<h3 class="page-header">
	Please Login
	</h3>
</div>
<div class="row">
	<div class="col-lg-3"></div>
	<div class="col-lg-6">
		@if(Session::has('alert-danger'))
			<div class="alert alert-danger">
				<strong>{{ Session::get('alert-danger') }}</strong>
			</div>
		@endif
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h3 class="panel-title">Login</h3>
			</div>
			<div class="panel-body">
					{{ Form::open(array('url' => '/admin/login')) }}
						<div class="form-group">
							{{ Form::label('username', 'Username') }}
							{{ Form::text('username', null, array('class' => 'form-control','placeholder' => 'username')) }}
						</div>
						<div class="form-group">
							{{ Form::label('password', 'Password') }}
							{{ Form::password('password', array('class' => 'form-control','placeholder' => 'password')) }}
						</div>
						{{ Form::submit('Login', array('class' => 'btn btn-lg btn-primary')) }}
					{{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop