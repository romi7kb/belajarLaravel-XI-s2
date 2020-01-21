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

// route basic
Route::get('halo',function ()
{
    return "Hallo World";
});

Route::get('about',function ()
{
    return "<h1>hallo</h1>
            <br>Selamat Datang di web saya!";
});
Route::get('about/profil/nama',function ()
{
    return "Nama Saya Romi";
});
Route::get('about/profil/kelas',function ()
{
    return "Saya kelas XI RPL 1";
});
Route::get('about/profil/alamat',function ()
{
    return "Saya tinggal di Terate";
});
Route::get('about/profil/umur',function ()
{
    return "Umur saya 17 tahun";
});
Route::get('about/profil/teman',function ()
{
    return "Saya memiliki teman";
});

// Route parameter
Route::get('about/profil/nama/{nama}',function ($a)
{
    return "Nama Saya $a";
});
Route::get('about/profil/{nama}/{alamat}/{sekolah}/{umur}',function ($nama,$alamat,$sekolah,$umur)
{
    return "Nama Saya $nama <br>saya tinggal di $alamat <br>Saya Bersekolah di $sekolah<br>Umur saya $umur Thn";
});
