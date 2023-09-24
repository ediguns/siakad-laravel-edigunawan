<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    // return view('welcome');
    // return view('pages.blank-page', ['type_menu'=>'']);
    return view('pages.app.dashboard-siakad', ['type_menu'=>'']);
 });

 Route::get('/login', function () {
    return view('pages.auth.auth-login');
 })->name('login');

 Route::get('/register', function () {
    return view('pages.auth.auth-register');
 })->name('regsiter');

 Route::get('/forgot', function () {
    return view('pages.auth.auth-forgot-password');
 })->name('forgot');

 Route::get('/resset-password', function () {
    return view('pages.auth.auth-reset-password');
 })->name('forgot');
