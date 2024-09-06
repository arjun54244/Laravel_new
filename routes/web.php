<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\blogController;
use App\Http\Controllers\ProvisionServer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::get('/login/{name}', ProvisionServer::class);
Route::get('/', function (){
    return view('welcome')->with('last','sharma');
});

Route::get('/login', [AuthController::class, 'login']);
Route::get('/greeting', [AuthController::class, 'greeting']);