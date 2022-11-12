<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\requestsController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\orderController;





Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::resource('/users',userController::class);
Route::resource('/requests',requestsController::class);
Route::resource('/menu',menuController::class);
Route::resource('/order',orderController::class);



