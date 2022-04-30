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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');


Route::get('/personalloan', function () {
    return view('eligibilityForm/form');
})->name('personalloan');

Route::post('/eligible/form', [\App\Http\Controllers\LoanController::class, 'store'])->name('eligible/form');


//Route::get('osit/home', [PackageController::class, 'home'])->name('dashboard');
