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
Route::view('/', 'signin');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

Route::get('/cabang', function () {
    return view('cabang');
})->name('cabang');

Route::get('/laporan', function () {
    return view('laporan');
})->name('laporan');

Route::get('/addadmin', function () {
    return view('addadmin');
})->name('addadmin');

Route::get('/addcabang', function () {
    return view('addcabang');
})->name('addcabang');

Route::get('/editadmin', function () {
    return view('editadmin');
})->name('editadmin');

Route::get('/editprofil', function () {
    return view('editprofil');
})->name('editprofil');

Route::get('/laporancabang', function () {
    return view('laporancabang');
})->name('laporancabang');

Route::get('/profiladmin', function () {
    return view('profiladmin');
})->name('profiladmin');

Route::get('/profiluser', function () {
    return view('profiluser');
})->name('profiluser');

Route::get('/changepassword', function () {
    return view('changepassword');
})->name('changepassword');

Route::get('/signin', function () {
    return view('layout.signin');
})->name('signin');

Route::get('/signup', function () {
    return view('layout.signup');
})->name('signup');

Route::get('/logout', function () {
    return view('logout');
})->name('logout');