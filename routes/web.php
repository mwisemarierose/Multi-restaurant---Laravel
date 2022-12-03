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
// Route::get('/restaurants', function () {
//     return view('frontend.restaurant.restaurants');
// });
// Route::get('/Restaurant_menu', function () {
//     return view('frontend.restaurant.Restaurant_menu');
// });
Route::get('/Admin', function () {
    return view('frontend.dashboard.admindash');
});
// Route::get('/usertable', function () {
//     return view('frontend.dashboard.tables.usertable');
// });
Route::get('/profile', function () {
    return view('frontend.dashboard.userProfile.Userprofile');
});

Route::get('/Manager', function () {
    return view('frontend.dashboard.manager');
});
// Route::get('/Admin', function () {
//     return view('frontend.dashboard.admindash');
// });
// Route::get('/Product', function () {
//     return view('frontend.dashboard.tables.product');
// });
Route::get('/restaurant_table', function () {
    return view('frontend.dashboard.tables.restaurants');
});
Route::get('/Order', function () {
    return view('frontend.dashboard.tables.ordertable');
});
Route::get('/Forget', function () {
    return view('frontend.accounts.forget');
});
Route::get('/Reset', function () {
    return view('frontend.accounts.reset');
});
Route::get('/Userform', function () {
    return view('frontend.dashboard.forms.userform');
});
Route::get('/Restaurantform', function () {
    return view('frontend.dashboard.forms.restaurantform');
});
Route::get('/orderform', function () {
    return view('frontend.dashboard.forms.orderform');
});
Route::get('/users/managers', function () {
    return view('frontend.dashboard.tables.managerTable');
});
Route::get('/users/clients', function () {
    return view('frontend.dashboard.tables.usertable');
});
Route::get('/users/getAll', function () {
    return view('frontend.dashboard.tables.usersTable');
});
Route::get('/orderc', function () {
    return view('frontend.restaurant.order');
});
Route::group(['middleware'=>['auth:sanctum']], function () {
    Route::get('/Manager',[UserController::class,'manager']);
    
});



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();

});
Route::get("/users/logout",[UserController::class, 'logout']);
Route::get("/users/clients",[UserController::class, 'client']);
// Route::resource('/users',UserController::class);
Route::post("/users/login",[UserController::class, 'login']);
Route::post("/users/store",[UserController::class, 'store']);
Route::get("/users/getAll",[UserController::class, 'index']);


Route::get("/users/managers",[UserController::class, 'manager']);


Route::post('/requests/store',[requestsController::class,'store']);

Route::patch('/requests/approve/{id}',[requestsController::class,'approveRequest']);
Route::patch('/requests/reject/{id}', [requestsController::class,'rejectRequest']);
Route::get('/requests/approved',    [requestsController::class,'approvedRequest']);
// Route::resource('/requests',requestsController::class);

Route::get('/menu/Usermenu/{id}',[menuController::class,'Usermenu']);
Route::get('/menu/getAll',[menuController::class,'findAll']);
// Route::get('/menu/getUsermenu/{id}',[menuController::class,'getUsermenu']);
Route::post('/menu/store',[menuController::class,'store']);
// Route::resource('/menu',menuController::class);


// Route::resource('/order',orderController::class);





