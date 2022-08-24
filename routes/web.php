<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\OrderController;

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
})->name('welcome');

Route::get('/juggler', function () {
    return view('juggler.index');
})->name('juggler');

Route::get('/orders/manager', function () {
    return view('orders.manager');
})->name('manager');

Route::resource('/devices', DeviceController::class);
Route::resource('/libs', LibraryController::class);
Route::resource('/boards', BoardController::class);
Route::resource('/orders', OrderController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
