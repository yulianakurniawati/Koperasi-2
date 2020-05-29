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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/','SiteController@index');

Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::group(['middleware' => ['auth','checkRole:admin']], function () {

    //fitur anggota
    Route::get('/anggota','AnggotaController@index');
    Route::post('/anggota/create','AnggotaController@create');
    Route::get('/anggota/{id}/edit','AnggotaController@edit');
    Route::post('/anggota/{id}/update','AnggotaController@update');
    Route::get('/anggota/{id}/delete','AnggotaController@delete'); 
    Route::get('/anggota/{id}/profile','AnggotaController@profile');
   

    //fitur simpanan
    Route::get('/simpanan','SimpananController@index');
    Route::post('/simpanan/create','SimpananController@create');
    Route::get('/simpanan/{id}/edit','SimpananController@edit');
    Route::post('/simpanan/{id}/update','SimpananController@update');
    Route::get('/simpanan/{id}/delete','SimpananController@delete');
    
    //fitur pinjaman
    Route::get('/pinjaman','PinjamanController@index');
    Route::post('/pinjaman/create','PinjamanController@create');
    Route::get('/pinjaman/{id}/edit','PinjamanController@edit');
    Route::post('/pinjaman/{id}/update','PinjamanController@update');
    Route::get('/pinjaman/{id}/delete','PinjamanController@delete');

    // fitur angsuran
    Route::get('/angsuran','AngsuranController@index');
    Route::post('/angsuran/create','AngsuranController@create');
    Route::get('/angsuran/{id}/edit','AngsuranController@edit');
    Route::post('/angsuran/{id}/update','AngsuranController@update');
    Route::get('/angsuran/{id}/delete','AngsuranController@delete');

    // fitur pemasukan  angsuran
    Route::get('/pemasukan','PemasukanAngsuranController@index');
    Route::post('/pemasukan/create','PemasukanAngsuranController@create');
    Route::get('/pemasukan/{id}/edit','PemasukanAngsuranController@edit');
    Route::post('/pemasukan/{id}/update','PemasukanAngsuranController@update');
    Route::get('/pemasukan/{id}/delete','PemasukanAngsuranController@delete');
    Route::get('/pemasukan/search','PemasukanAngsuranController@search');

    //fitur pemasukan simpanan
    Route::get('/tabungan','TabunganController@index');
    Route::post('/tabungan/create','TabunganController@create');
    Route::get('/tabungan/{id}/edit','TabunganController@edit');
    Route::post('/tabungan/{id}/update','TabunganController@update');
    Route::get('/tabungan/{id}/delete','TabunganController@delete');
    Route::get('/tabungan/search','TabunganController@search');

    //fitur pengeluaran
    Route::get('/keluar','PengeluaranController@index');
    Route::post('/keluar/create','PengeluaranController@create');
    Route::get('/keluar/{id}/edit','PengeluaranController@edit');
    Route::post('/keluar/{id}/update','PengeluaranController@update');
    Route::get('/keluar/{id}/delete','PengeluaranController@delete');
    Route::get('/keluar/search','PengeluaranController@search');
   
    //fitur laporan saldo bulanan
    Route::get('/laporan','LaporanController@index');
    Route::post('/laporan/create','LaporanController@create');
    Route::get('/laporan/{id}/edit','LaporanController@edit');
    Route::post('/laporan/{id}/update','LaporanController@update');
    Route::get('/laporan/{id}/delete','LaporanController@delete');
    Route::get('/laporan/search','LaporanController@search');
    Route::get('/laporan/cetak_pdf','LaporanController@cetakPdf');


});

//diakses anggota dan admin
Route::group(['middleware' => ['auth','checkRole:anggota']], function () {
    Route::get('/dashboard','DashboardController@index');
    

});