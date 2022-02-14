<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HallController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ServiceController;
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

Route::get('/',[RoomController::class,'index']);
Route::get('/Halls',[HallController::class,'index']);
Route::get('/Room_checkout',[RoomController::class,'checkout']);
Route::get('/Room_renewal',[RoomController::class,'renewal']);
Route::get('/Hall_checkout',[HallController::class,'checkout']);
Route::get('/Special_card',[ServiceController::class,'special_card']);
Route::get('/Child_care',[ServiceController::class,'child_care']);
Route::get('/Cafe_order',[ServiceController::class,'cafe_order']);
Route::get('/Pool',[ServiceController::class,'pool']);
