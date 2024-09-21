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

Route::resource('Jenis','JenisController');
Route::resource('Petugas','PetugasController');
Route::resource('Ruang','RuangController');
Route::resource('Pegawai','PegawaiController');
Route::resource('Level','LevelController');
Route::resource('Inventori','InventoriController');
Route::resource('Pinjam','PinjamController');

//pemanggilan antara view ke view
Route::get('/', function () {
    return view('home');
});
//Route::get('jenis',function(){
	//return view('jenis/jenis');
//});
//Route::get('dataJenis',function(){
	//return view('jenis/dataJenis');
//});



//Route::get('jenis','JenisController@index');
//Route::get('tambahjenis','JenisController@create');
//Route::post('simpanjenis','JenisController@store');

//Route::get('editanggota{id}','MAnggotaController@edit');
//Route::post('updateanggota{id}','MAnggotaController@update');
//Route::get('deleteanggota{id}','MAnggotaController@destroy');