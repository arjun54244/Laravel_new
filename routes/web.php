<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ProvisionServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


// Route::get('/login/{name}', ProvisionServer::class);
// Route::get('/', function (){
//     return view('welcome')->with('last','sharma');
// });

// Route::get('/login', [AuthController::class, 'login']);
// Route::get('/greeting', [AuthController::class, 'greeting']);
// Route::get('/user', [AuthController::class, 'listUser']);
// Route::get('/product/insert', [AuthController::class, 'insertProducts'])->name('products.insert');
// Route::post('/products/insert', [AuthController::class, 'insertProductsPost'])->name('products.insert.post');

// Route::get('/products/insert',[AuthController::class, 'insertProducts']);
// Route::post('/products/insert',[AuthController::class, 'insertProductsPost'])->name('products.insert.post');

// routes/web.php
Route::get('/products', [AuthController::class, 'insertProducts']);
Route::post('/products', [AuthController::class, 'insertProductsPost'])->name('products.insert.post');
Route::post('/products/update', [AuthController::class, 'updateProductsPost'])->name('products.update.post');
