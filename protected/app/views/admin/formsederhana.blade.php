@extends('admin.layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Halaman
			<small>Form Sederhana</small>
		</h1>
		 <ol class="breadcrumb">
            <li>
                <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
            </li>
            <li class="active">
                <i class="fa fa-edit"></i> Forms
            </li>
        </ol>
    </div>
</div>
<div class="row">
	<div class="col-lg-12">
		{{ Form::open(array('url' => 'formsederhana')) }}
		<div class="form-group">
			{{ Form::label('nama', 'Nama') }}
			{{ Form::text('nama', null, array('class' => 'form-control','placeholder' => 'masukan nama anda')) }}
		</div>
		<div class="form-group">
			{{ Form::label('jeniskelamin', 'Jenis Kelamin') }}
			{{ Form::select('jeniskelamin', array('L' => 'Laki - Laki', 'P' => 'Perempuan'), null, array('class' => 'form-control', 'placeholder' => 'Pilih Jenis Kelamin')) }}
		</div>
		<div class="form-group">
			{{ Form::label('alamat', 'Alamat') }}
			{{ Form::textarea('alamat', null, array('class' => 'form-control', 'placeholder' => 'Masukan Alamat Anda')) }}
		</div>
		{{ Form::submit('Kirim', array('class' => 'form-control')) }}
		{{ Form::close() }}
	</div>
</div>	
@stop