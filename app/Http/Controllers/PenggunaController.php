<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengguna;
use App\Buku;

class PenggunaController extends Controller
{
    public function listDataYangSudahDiInput()
	{
		$data=[];
		$data['daftar_pengguna'] = Buku::all();
		return view('pengguna.list_data',$data);
	}
	
	public function tambah(Request $request )
	{
		if( !$request->has('nama')  ){
			return view('pengguna.add');
		}else{
			$pengguna = new Buku;
			$pengguna->buku = $request->nama ; 
			$pengguna->save();
			return redirect()->route('pengguna.list');
		}		
	}
	
	public function edit( $id , Request $request )
	{
		$pengguna = Pengguna::find($id);
		if(empty($pengguna)){
			return redirect()->route('pengguna.list');
		}
		
		if( !$request->has('nama')  ){
			$data=[
				'nama'=>$pengguna->nama
			];
			return view('pengguna.add' , $data );
		}else{
			$pengguna->nama = $request->nama;
			$pengguna->save();
			return redirect()->route('pengguna.list');
		}		
	}
	
	public function hapus( $id )
	{
		Pengguna::destroy($id);
		return redirect()->route('pengguna.list');	
	}
}
