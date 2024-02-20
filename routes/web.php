<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImagesController;

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

Route::get('/', [ImagesController::class, 'index']);
Route::post('/', [ImagesController::class, 'post'])->name('post');
Route::get('/view', [ImagesController::class, 'data'])->name('data');
Route::get('function', [ImagesController::class, 'function']);
