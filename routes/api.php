<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\requestsController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\orderController;


Route::middleware('auth:sanctum','can:delete')->get('/user', function (Request $request) {
    return $request->user();

});

Route::post("/users/login",[UserController::class, 'login']);
Route::get("/users/managers",[UserController::class, 'manager']);
Route::get("/users/clients",[UserController::class, 'client']);
Route::resource('/users',UserController::class);

Route::patch('/requests/approve/{id}',[requestsController::class,'approveRequest']);
Route::patch('/requests/reject/{id}', [requestsController::class,'rejectRequest']);
Route::get('/requests/approved',    [requestsController::class,'approvedRequest']);
Route::resource('/requests',requestsController::class);

Route::get('/menu/getAll',[menuController::class,'findAll']);
Route::get('/menu/getUsermenu/{id}',[menuController::class,'getUsermenu']);
Route::resource('/menu',menuController::class);


Route::resource('/order',orderController::class);

// Route::group(['middleware'=>['auth:sanctum','can:delete product']], function () {
//     Route::delete('/menu/delete/{id}',[menuController::class,'destroy']);
// });
// Route::group(['middleware'=>['auth:sanctum','can:create product']], function () {
//     Route::post('/menu',[menuController::class,'store']);
// });
// Route::group(['middleware'=>['auth:sanctum','can:update product']], function () {
//     Route::patch('/menu/update/{id}',[menuController::class,'update']);
// });


