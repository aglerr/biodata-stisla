<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BiodataController;

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
    return redirect()->route('dashboard', ['page' => 'biodata']);
});

Route::get('/dashboard', function() {
    return redirect()->route('dashboard', ['page' => 'biodata']);
});

Route::get('/dashboard/{page}', [BiodataController::class, 'index'])->name('dashboard');

Route::get('/register', function () {
    return view('pages.register');
})->name('register');

Route::post('/register-success', [UserController::class, 'simpanUser']);

Route::post('/save-biodata', [BiodataController::class, 'simpanBiodata']);
