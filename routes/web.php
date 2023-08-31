<?php

use App\Http\Controllers\FileCrudController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\YousufController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', function (Request $request) {
    return $request->city;
});

Route::get('/user/{id}', function ($id) {
    return $id;
});

/*
Route::get('/useru/{id}/{name?}', function ($id, $name = "Naam nai") {
    return "$id er naam holo $name";
});

Route::get('/userControl', [UserController::class, "userPage"]);
Route::get('/userInfo', [UserController::class, "userFunc"]);
*/

Route::controller(UserController::class)->group(function () {
    Route::get("/userControl", "userPage");
    Route::get("/userInfo", "userFunc");
    Route::get("/useru/{id}/{name?}", "userId");
});

Route::controller(YousufController::class)->prefix("yousuf")->group(function () {
    Route::get("/age/{age?}", "yousufFunc");
    Route::get("/molla", "molla");
    Route::get("/nabi", "nabi");
});

Route::resource('/student', StudentController::class);
Route::resource('/files', FileCrudController::class);
