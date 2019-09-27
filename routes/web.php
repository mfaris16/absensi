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

Route::get('/', 'HomeController@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/daftar','DaftarController@index');

Route::get('/siswa', 'SiswaController@index');

Route::get('/jurusan','JurusanController@index');

Route::get('/sangga', 'SanggaController@index');

Route::post('daftar/store','DaftarController@store');

Route::post('absensi/store','AbsensiController@store');

Route::get('laporan','AbsensiController@home')->name('laporan');

Route::group(['middleware'=>['auth','CekRole:Admin']],function(){
    Route::resource('admin/jurusan', 'JurusanController');
    Route::resource('admin/sangga', 'SanggaController');
    Route::resource('admin/siswa', 'SiswaController');
    Route::get('admin/siswa', 'SiswaController@home');
});

Route::group(['middleware'=>['auth','CekRole:Sekretaris']],function(){
    Route::get('sekretaris/absensi/ruangan1', 'AbsensiController@koordinator1');
    Route::get('sekretaris/absensi/ruangan2', 'AbsensiController@koordinator2');
    Route::get('sekretaris/absensi/ruangan3', 'AbsensiController@koordinator3');

    Route::get('sekretaris/rekap/absensi1', 'AbsensiController@ruangan1')->name('absensi.ruangan1');
    Route::get('sekretaris/rekap/absensi2', 'AbsensiController@ruangan2');
    Route::get('sekretaris/rekap/absensi3', 'AbsensiController@ruangan3');
});

Route::get('laporan-pdf1','AbsensiController@generatePDF1');
Route::get('laporan-pdf2','AbsensiController@generatePDF2');
Route::get('laporan-pdf3','AbsensiController@generatePDF3');

Route::group(['middleware'=>['auth','CekRole:Koordinator','CekLevel:1']],function(){
    Route::get('absensi/ruangan1', 'AbsensiController@koordinator1');
});

Route::group(['middleware'=>['auth','CekRole:Koordinator','CekLevel:2']],function(){
    Route::get('absensi/ruangan2', 'AbsensiController@koordinator2');
});

Route::group(['middleware'=>['auth','CekRole:Koordinator','CekLevel:3']],function(){
    Route::get('absensi/ruangan3', 'AbsensiController@koordinator3');
});

Route::get('daftarlist/getjurusan/{id}','DaftarController@getJurusan');

Route::get('daftarlist/getsangga/{id}','DaftarController@getSangga');
