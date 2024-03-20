<?php


use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BeritaController;

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
     return view('welcome');
});

Route::get('/smartphone', function () {

    return view('/smartphone');
});

Route::get('/laptop', function () {

    return view('/laptop');
});

Route::get('home', function () {
    return view('/home');
});

Route::get('welcome', function () {
    return view('/home');
});

Route::get('welcome', function () {
    return view('/smartphone');
});

Route::get('welcome', function () {
    return view('/laptop');
});

Route::get('welcome', function () {
    return view('/tablets');
});

Route::get('/tablets', function () {
    return view('/tablets');
});

Auth::routes();

Route::get('/admin/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/login', [App\Http\Controllers\AuthController::class, 'login']);
Route::get('/admin/logout', [App\Http\Controllers\AuthController::class, 'logout']);
Route::post('/admin/login', [App\Http\Controllers\AuthController::class, 'authenticate'])->name('auth.authenticate');


Route::resource('news', BeritaController::class);