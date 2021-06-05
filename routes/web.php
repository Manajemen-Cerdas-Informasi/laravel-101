<?php

use App\Http\Controllers\BelajarController;
use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
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
    return view('welcome');
});

Route::get('hello-world', [BelajarController::class, 'hello_world']);

Route::get('product/{product?}', [ProductController::class, 'index']);

Route::get('form', [ProductController::class, 'form'])->name('form');
Route::post('coba-post', [ProductController::class, 'coba_post'])->name('coba_post');

Route::view('home', 'home')->middleware('auth');
