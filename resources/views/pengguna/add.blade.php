<?php $judulnya = 'Tambah Pengguna !!!' ?>
@extends('layout_saya.file_utama_template',['title'=>$judulnya])

@section('content')
	<form method="POST">
		@isset($nama)
			<input type="text" name="nama" value="{{ $nama }}"/>
		@else
			<input type="text" name="nama" placeholder="Ketikkan nama pengguna yang akan ditambah" />
		@endisset
		
		@csrf
		<button>Simpan</button>
	</form>
@stop