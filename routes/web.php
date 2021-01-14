<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//depan
Route::get('/depan/profil', 'PageController@Profil');
Route::get('/depan/rekomendasi', 'PageController@rekomendasi');
Route::get('/depan/profil', 'PageController@index');



//admin
Route::get('/admin/profiladmin/{id}', 'AdminController@editprofil');

Route::post('/admin/updateprofil','AdminController@updateprofil');
Route::get('/admin/profiladmin','AdminController@indexadmin');



//admincrud
Route::get('/admin/input/distmk', 'AdminController@distribusiMK');
Route::get('/admin/input/datakurikulum', 'AdminController@datakuri');
Route::get('/admin/input/datarekomendasi', 'AdminController@datareko');
Route::get('/admin/input/datareferen', 'AdminController@datarefe');



//crud datakureikulum
Route::get('/admin/input/addkuri','KurikulumController@addkuri');
Route::post('/admin/tambahkuri','KurikulumController@tambahkuri');
Route::post('/admin/updatekuri','KurikulumController@updatekuri');
Route::get('/admin/editkuri/{id}','KurikulumController@editkuri');
Route::get('/admin/hapuskuri/{id}','KurikulumController@hapuskuri');
Route::get('/admin/input/datakurikulum', 'KurikulumController@indexkuri');
Route::get('/admin/input/addkuri', 'KurikulumController@panggil');
Route::get('/admin/input/reportsms','KurikulumController@indexre');
Route::get('/admin/reportsms/{smsawal}/{smsakhir}','KurikulumController@reportsms');
Route::get('/admin/input/cetaklaporan','KurikulumController@cetaklapo');
Route::get('/admin/carikur','KurikulumController@carikur');

//crud datamatakuliah
Route::get('/admin/input/addmatakuli','DisMatkulController@addmatakuli');
Route::post('/admin/tambahmatakuli','DisMatkulController@tambahmatakuli');
Route::post('/admin/updatematakuli','DisMatkulController@updatematakuli');
Route::get('/admin/editmatakuli/{id}','DisMatkulController@editmatakuli');
Route::get('/admin/hapusmatakuli/{id}','DisMatkulController@hapusmatakuli');
Route::get('/admin/input/distmk','DisMatkulController@indexmatakuli');
Route::get('/admin/caridis','DisMatkulController@caridis');



//crud referensi
Route::get('/admin/input/addrefe','ReferensiController@addrefe');
Route::post('/admin/tambahrefe','ReferensiController@tambahrefe');
Route::get('/admiin/hapusrefe','ReferensiController@hapusrefe');
Route::get('/admin/input/datareferen','ReferensiController@indexrefe');
Route::get('/admin/hapusrefe/{id}','ReferensiController@hapusrefe');

//crud rekomendasi
Route::get('/admin/input/datarekomendasi','RekomendasiController@indexrekom');
Route::get('/admin/editrekom/{id}','RekomendasiController@editrekom');
Route::get('/admin/hapusrekom/{id}','RekomendasiController@hapusrekom');
Route::post('/admin/updaterekom','RekomendasiController@updaterekom');
Route::post('/admin/tambahrekom', 'RekomendasiController@tambahrekom');
Route::get('/admin/carirek','RekomendasiController@carirek');





