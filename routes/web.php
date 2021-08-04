<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\roomsController;
use App\Http\Controllers\RoomsController as ControllersRoomsController;
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

Route::get('/', function () {
    return view('analistic.index');
})->name('dashboard');
//room
Route::get('rooms', [roomsController::class, 'listRoom'])->name('listRoom');
Route::get('rooms/create', [roomsController::class, 'getaddRoom'])->name('getaddRoom');
Route::post('rooms/create', [roomsController::class, 'postaddRoom'])->name('postaddRoom');

Route::get('rooms/edit/{id}', [roomsController::class, 'geteditRoom'])->name('geteditRoom');
Route::post('rooms/edit/{id}', [roomsController::class, 'posteditRoom'])->name('posteditRoom');
Route::get('room/delete/{id}',[roomsController::class,'deleteRoom'])->name('deleteRom');


// service

Route::get('services', [ServiceController::class, 'listService'])->name('listService');
Route::get('service/create', [ServiceController::class,'getCreateService'])->name('getCreateService');
Route::post('service/create', [ServiceController::class,'postCreateService'])->name('postCreateService');

Route::get('service/delete/{id}',[ServiceController::class,'deleteService'])->name('deleteService');

Route::get('service/edit/{id}',[ServiceController::class,'getEditService'])->name('getEditService');
Route::post('service/edit/{id}',[ServiceController::class,'postEditService'])->name('postEditService');

Route::get('login',[LoginController::class, 'loginForm'])->name('loginForm');
Route::post('login',[LoginController::class, 'Postlogin']);

Route::get('demo-name/{id}', function ($id) {
    return $id;
})->middleware(['auth'])->name('demo_route');

Route::get('logout',[LoginController::class, 'logout'])->name('logoutForm');
Route::get('register', [LoginController::class, 'getRegForm'])->name('getReg');
Route::post('register', [LoginController::class, 'postReg'])->name('postReg');