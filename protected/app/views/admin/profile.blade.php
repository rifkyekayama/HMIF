@extends('admin.layouts.master')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">
			Halaman
			<small>Profile</small>
		</h1>
		<table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>NIM</th>
                    <th>Nama Lengkap</th>
                    <th>angkatan</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1;?>
                @foreach($datanim as $value)
                    <tr>
                        <td>{{ $no }}<?php $no++;?></td>
                        <td>{{{ $value->nim }}}</td>
                        <td>{{{ $value->namaLengkap }}}</td>
                        <td>{{{ $value->angkatan }}}</td>
                    </tr>
                @endforeach   
            </tbody>
        </table>
	</div>
</div>
@stop