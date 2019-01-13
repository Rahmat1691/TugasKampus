<?php $judulnya='List Data Bro !!!' ?>
@extends('layout_saya.file_utama_template',['title'=>$judulnya])
@section('content')
	<h1>List Data</h1>
 <table style="width:700px;" border="1">
		<thead><tr><th style="width:30%">Id</th><th style="width:60%">Nama</th></tr></thead>
		<tbody>
		@isset($daftar_pengguna)
			@foreach($daftar_pengguna as $val)
				<tr><td>{{$val->id}}</td><td>{{$val->nama}}</td></tr>
			@endforeach
		@else
				<tr><td colspan="2">Tidak ada data</td></tr>
@endisset
		</tbody>
			
	</table>


@stop