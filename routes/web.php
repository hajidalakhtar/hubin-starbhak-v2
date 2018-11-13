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
Route::get('/pdf/{id}' ,'PDFController@pdf')->name('downloadPDF');

// user
Route::get('/', function () {
    return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::post('/ProssesEditProfil', 'HomeController@ProssesEditProfil')->name('ProssesEditProfil');
Route::get('/edit-profil', 'HomeController@EditProfil')->name('ShowEditProfil');
Auth::routes();

// Admin
Route::get('/admin' ,'AdminLoginController@ShowAdminLogin')->name('admin.form.login');
Route::get('/admin/list-kunjin' ,'Kunjungan_Industri@ReadKunjin')->middleware('auth:admin')->name('ListKunjin');
Route::get('/admin/home' ,'AdminController@index')->middleware('auth:admin')->name('admin.home');
Route::post('/admin/login/submit', 'AdminLoginController@adminlogin')->name('admin.login');
Route::get('/admin/logout', 'AdminLoginController@logout')->name('admin.logout');

// perusahaan
Route::get('/perusahaan', 'PerusahaanLoginController@ShowPerusahaanLogin')->name('perusahaan.form.login');
Route::get('/perusahaan/home/{id}', 'PerusahaanController@perusahaanhome')->name('perusahaan.home')->middleware('auth:perusahaan');
Route::post('/perusahaan/login/submit', 'PerusahaanLoginController@Perusahaanlogin')->name('perusahaan.login');
Route::get('/perusahaan/register', 'PerusahaanLoginController@showPerusahaanRegister')->name('perusahaan.show.add');
Route::post('/perusahaan/register/add', 'PerusahaanLoginController@create')->name('perusahaan.add');


// Kunjungan_Industri

Route::get('/kunjin/AddStatusKunjin/{id}','Kunjungan_Industri@AddStatusKunjin')->name('Kunjin.AddStatusKunjin');
Route::post('/kunjin/update','Kunjungan_Industri@update')->name('Kunjin.Update')->middleware('auth:admin');
Route::get('/kunjin/detaildata/{id}','Kunjungan_Industri@DetailData')->name('Kunjin.DetailData')->middleware('auth:admin');
Route::get('/kunjin/edit/{id}','Kunjungan_Industri@edit')->name('Kunjin.edit')->middleware('auth:admin');
Route::get('/kunjin/delete/{id}','Kunjungan_Industri@Delete')->name('Kunjin.Delete')->middleware('auth:admin');
Route::get('/kunjin/AddStatusUser/{id}/{perusahaan}','Kunjungan_Industri@AddStatusUser')->name('Kunjin.AddStatusUser');
Route::get('/form_kunjin','Kunjungan_Industri@ShowFormKunjin')->name('form_kunjin');
Route::post('/prosesaddkunjin','Kunjungan_Industri@prosesadd')->name('Kunjin.ProsesAdd');
