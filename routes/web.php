<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Redirect;
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

Route::get('/', [ListingController::class, 'index']);
Route::get('/add-point', [ListingController::class, 'addPoint']);
Route::get('/flowers', [ListingController::class, 'all']);
Route::get('/flowers/{listing}', [ListingController::class, 'show']);
Route::post('/order', [ListingController::class, 'storeOrder']);
Route::post('/listings', [ListingController::class, 'store']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/add-product', [ProfileController::class, 'create']);
Route::get('/profile/flowers', [ProfileController::class, 'index']);
Route::get('/profile/flowers/{listing}', [ProfileController::class, 'edit']);
Route::get('/profile/place', [PlaceController::class, 'edit']);

Route::get('/places', [PlaceController::class, 'index']);
Route::put('/places/{place}', [PlaceController::class, 'update']);
Route::post('/places', [PlaceController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);
Route::get('/registration', [UserController::class, 'create']);
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
Route::post('/users', [UserController::class, 'store']);