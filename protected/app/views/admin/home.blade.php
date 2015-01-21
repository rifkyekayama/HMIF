@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            Halaman
            <small>Beranda </small>
        </h1>
        @if(Session::has('alert-info'))
			<div class="alert alert-success">
				<strong>{{ Session::get('alert-info') }}</strong>
			</div>
		@endif
        Ini halaman home / beranda
    </div>
</div>
@stop