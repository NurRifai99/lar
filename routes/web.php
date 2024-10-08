<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RegistrasiController;

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
//     return view('welcome');
// });

Route::get(uri: '/', action: [LoginController::class, 'login'])->name(name: 'login'); 
Route::post(uri: 'actionlogin', action: [LoginController::class, 'actionlogin'])->name(name: 'actionlogin');

Route::get(uri: 'home', action: [HomeController::class, 'index'])->name(name: 'home')->middleware(middleware: 'auth');
Route::get(uri: 'actionlogout', action: [LoginController::class, 'actionlogout'])->name(name: 'actionlogout'); 

Route::get('register', [RegistrasiController::class, 'index'])->name('register');
Route::post('register/action', [RegistrasiController::class, 'actionregister'])->name('actionregister');
