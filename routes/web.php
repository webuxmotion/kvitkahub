<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\ProfileController;
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
Route::get('/flowers/{listing}', [ListingController::class, 'show']);
Route::post('/order', [ListingController::class, 'storeOrder']);
Route::post('/listings', [ListingController::class, 'store']);
Route::put('/listings/{listing}', [ListingController::class, 'update']);
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/profile/add-product', [ProfileController::class, 'create']);
Route::get('/profile/flowers', [ProfileController::class, 'index']);
Route::get('/profile/flowers/{listing}', [ProfileController::class, 'edit']);