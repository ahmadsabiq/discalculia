<?php

use App\Http\Controllers\AdminUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardBioController;
use App\Http\Controllers\DashboardWebglController;
use App\Http\Controllers\DashboardReportController;

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
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/webgl', function () {
    return view('index', [
        
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);


Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function(){
    return view('dashboard.index', [
        "title" => "Dashboard",
        "active" => "dashboard"
    ]);
})->middleware('auth');

Route::resource('dashboard/biodata', DashboardBioController::class)->middleware('auth');
Route::resource('dashboard/latihan', DashboardWebglController::class)->middleware('auth');
Route::resource('dashboard/laporan', DashboardReportController::class)->middleware('auth');


// Admininstrator
Route::resource('dashboard/user', AdminUserController::class)->middleware('admin');
