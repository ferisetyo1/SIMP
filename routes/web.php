<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Signin');
});

Route::get('/Home', function () {
    return view('Home');
});


route::get('/Signin','Authcontroller@signin')->name('signin');
route::post('/postsignin','Authcontroller@postsignin');
route::get('/logout','Authcontroller@logout');

route::group(['middleware' => ['auth','Checkrole:admin,siswa,guru']], function(){
    route::get('/Datasiswa','Siswacontroller@index');
    route::post('/Datasiswa/create','Siswacontroller@create');
    route::get('/Datasiswa/{id}/edit','Siswacontroller@edit');
    route::post('/Datasiswa/{id}/update','Siswacontroller@update');
    route::get('/Datasiswa/{id}/delete','Siswacontroller@delete');
    route::get('/Datasiswa/{id}/jurnal','Siswacontroller@jurnal')->name('siswa.jurnal');
    route::post('/Datasiswa/{id}/addkegiatan','Siswacontroller@addkegiatan');
    route::get('/Datasiswa/{id}/{idjurnal}/deletejurnal','Siswacontroller@deletejurnal');

    route::get('/Dataguru','Gurucontroller@index');
    route::post('/Dataguru/create','Gurucontroller@create');
    route::get('/Dataguru/{id}/edit','Gurucontroller@edit');
    route::post('/Dataguru/{id}/update','Gurucontroller@update');
    route::get('/Dataguru/{id}/delete','Gurucontroller@delete');
});
route::group(['middleware' => ['auth','Checkrole:siswa']], function(){
    route::get('jurnalkegiatan','Siswacontroller@jurnalkegiatan');
});
Route::get('/Panduan', function () {
    return view('Panduan');
});

Route::get('/Tugas', function () {
    return view('Tugas');
});

