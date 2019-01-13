<?php $judulnya = 'List Data Bro !!!' ?>
@extends('layout_saya.file_utama_template',['title'=>$judulnya])

@section('content')
	<h1>List Data</h1>
	<a href="{{ route('pengguna.tambahz') }}"><button >Tambah</button></a>
	
	<table style="width:700px;" border="1">
		<thead><tr><th style="width:30%">Id</th><th style="width:60%">Nama</th><th>Action</th></tr></thead>
		<tbody>
		@isset ($daftar_pengguna)
			@foreach($daftar_pengguna as $val)
				<tr><td >{{ $val->id }}</td> <td >{{ $val->buku }}</td> 
					<td>
						<a href="{{ route('pengguna.edit',['id'=>$val->id]) }}"><button> edit</button></a>
						<a href="{{ route('pengguna.delete',['id'=>$val->id]) }}"><button> delete</button></a>
					</td> 
				</tr>
			@endforeach
		@else
			<tr><td colspan="3">Tidak ada data</td></tr>
		@endisset
		</tbody>
	</table>
	
@stop