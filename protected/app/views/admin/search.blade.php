@extends('admin.layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Halaman
			<small> Pencarian mahasiswa</small>
		</h1>
		<div class="row">
			<div class="col-lg-6">
				{{ Form::open(array('url'=>'admin/search')) }}
				<div class="form-group input-group">
                    {{ Form::text('cari', null, array('class' => 'form-control')) }}
                    {{ Form::hidden('seleksi','1') }}
                    <span class="input-group-btn"><button class="btn btn-default" type="button"><i class="fa fa-search"></i></button></span>
                </div>
                {{ Form::close() }}
			</div>
		</div>
		<hr>
		<div class="row">
			<div class="col-lg-6">
				{{ Form::open(array('url'=>'admin/search')) }}
				<div class="form-group">
                    {{ Form::selectYear('angkatan', 2007, 2014, 2014, array('class' => 'form-control')) }}
                    {{ Form::hidden('seleksi','2') }}
                    {{ Form::submit('Search', array('class'=>'btn btn-lg btn-primary')) }}
                </div>
                {{ Form::close() }}
			</div>
		</div>
	</div>
</div>
@stop