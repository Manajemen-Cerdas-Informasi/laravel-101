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


Route::get('products', [ProductController::class, 'index'])->name('list_products');
Route::get('form', [ProductController::class, 'form'])->name('form');
Route::post('coba-post', [ProductController::class, 'coba_post'])->name('coba_post');
Route::get('edit/{product_id}', [ProductController::class, 'edit'])->name('edit');
Route::put('update/{product_id}', [ProductController::class, 'update'])->name('update');
Route::delete('delete/{product_id}', [ProductController::class, 'delete'])->name('delete');

Route::view('home', 'home')->middleware('auth');
