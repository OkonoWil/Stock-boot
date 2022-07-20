<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
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


//**************************ROUTE----HOME***************************/
Route::get("/", [HomeController::class, 'home']);


//**************************ROUTE----Login***************************/
Route::get('/login', [AuthController::class, 'getLogin']);


//**************************ROUTE----Products***************************/
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'save'])->name('products.save');
//routing dynamique avec nommage
Route::get('/products/{id}', [ProductController::class, 'details'])->name('products.details');
Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');
Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
Route::get('/products/{id}/destroy', [ProductController::class, 'getDestroy'])->name('products.getdestroy');
Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');