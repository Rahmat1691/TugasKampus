<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;

class PenggunaController extends Controller
{
	 public function listDataYangSudahDiInput ()
 	{
 	$data=[];
 	$data['daftar_pengguna']= Pengguna::all();
	return view ('pengguna.list_data',$data);
	
 	}
 }

