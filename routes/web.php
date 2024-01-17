<?php

use App\Http\Controllers\UserController;
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


// Route::get('/', function () {
//     // return view('welcome');
//     // return view('pages.blank-page', ['type_menu'=>'']);
//     return view('pages.app.dashboard-siakad', ['type_menu'=>'']);
//  });
Route::get('/', function () {
    return view('pages.auth.auth-login');
 });


Route::middleware(['auth'])->group( function () {
    Route::get('home', function () {
        return view('pages.app.dashboard-siakad', ['type_menu'=>'']);
    })->name('home');
    Route::resource('user', UserController::class);
});

//  Route::get('/register', function () {
//     return view('pages.auth.auth-register');
//  })->name('regsiter');

//  Route::get('/forgot', function () {
//     return view('pages.auth.auth-forgot-password');
//  })->name('forgot');

//  Route::get('/reset-password', function () {
//     return view('pages.auth.auth-reset-password');
//  })->name('reset');
