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
Route::get('/pengguna','PenggunaController@listDataYangSudahDiInput');
//variabel ke 2 , yang di return akan jadi output , kalau di string , laravel nganggap string itu nama file controller terus setelah @ method dari class controller itu


Route::get('/pengguna/add', function () {
    return 'pengguna/add';

});
Route::get('/pengguna/edit', function () {
    return 'pengguna/edit';

});
Route::get('/pengguna/delete', function () {
    return 'pengguna/delete';

});


