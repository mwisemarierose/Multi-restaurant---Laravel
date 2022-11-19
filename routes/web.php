<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\requestsController;
use App\Http\Controllers\menuController;
use App\Http\Controllers\orderController;


Route::get('/', function () {
    return view('frontend.home');
});
Route::get('/login', function () {
    return view('frontend.accounts.login');
});
Route::get('/register', function () {
    return view('frontend.accounts.register');
});
Route::get('/request', function () {
    return view('frontend.accounts.request');
});
Route::get('/restaurants', function () {
    return view('frontend.restaurant.restaurants');
});
Route::get('/Restaurant_menu', function () {
    return view('frontend.restaurant.Restaurant_menu');
});
Route::get('/Admin', function () {
    return view('frontend.dashboard.admindash');
});
Route::get('/usertable', function () {
    return view('frontend.dashboard.tables.usertable');
});
Route::get('/profile', function () {
    return view('frontend.dashboard.userProfile.Userprofile');
});

Route::get('/Manager', function () {
    return view('frontend.dashboard.manager');
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});

Route::resource('/users',UserController::class);
Route::post("/users/login",[UserController::class, 'login']);
Route::post("/users/store",[UserController::class, 'store']);


Route::post('/requests/store',[requestsController::class,'store']);

Route::patch('/requests/approve/{id}',[requestsController::class,'approveRequest']);
Route::patch('/requests/reject/{id}', [requestsController::class,'rejectRequest']);
Route::get('/requests/approved',    [requestsController::class,'approvedRequest']);
Route::resource('/requests',requestsController::class);

Route::get('/menu/getUsermenu/{id}',[menuController::class,'getUsermenu']);
Route::resource('/menu',menuController::class);


Route::resource('/order',orderController::class);





