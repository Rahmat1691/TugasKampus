<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//==============================================================================================
Route::get('/pengguna', 'PenggunaController@listDataYangSudahDiInput' )->name('pengguna.list');

Route::any('/pengguna/addzzzzzzzzzzzzzzzzzzz', 'PenggunaController@tambah')->name('pengguna.tambahz');

Route::any('/pengguna/edit/{id}', 'PenggunaController@edit')
	->where(['id' => '[0-9]+'])
	->name('pengguna.edit');
	
Route::get('/pengguna/delete/{id}','PenggunaController@hapus')
	->where(['id' => '[0-9]+'])
	->name('pengguna.delete');

//==============================================================================================

Auth::routes();

Route::get('/home',function(){
	return redirect()->route('home');
});



Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/coba', function () {
    return view('konten');
});

Route::prefix('dashboard')->group(function () {
	Route::get('/', 'HomeController@index')->name('home');

	});