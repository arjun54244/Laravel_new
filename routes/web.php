<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ProvisionServer;
use App\Http\Controllers\UploadManger;
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



// Group middleware
Route::middleware('auth')->group(function(){
    // routes/web.php
    Route::get('/products', [AuthController::class, 'insertProducts']);
    Route::post('/products', [AuthController::class, 'insertProductsPost'])->name('products.insert.post');
    Route::post('/products/update', [AuthController::class, 'updateProductsPost'])->name('products.update.post');
    
    
});
Route::view('/', 'welcome')->with('wellcome',"hello arjun");

//Uplode/ files
Route::get('uplode/file', [UploadManger::class, 'uploadFile']);
Route::post('uplode/file', [UploadManger::class, 'uploadFilePost'])->name('products.update.file');



Route::get('/login',[AuthController::class, 'loginfome'])->name("login");
Route::post('/login',[AuthController::class, 'loginfomePost'])->name('login.post');

Route::get('/register', [AuthController::class, 'register']);
Route::post('/register', [AuthController::class, 'registerPost'])->name('register.post');