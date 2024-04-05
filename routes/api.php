<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;
use App\Http\Controllers\GuestCOntroller;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/mitra', [MitraController::class, 'index']);
Route::get('/mitra/{id}', [MitraController::class, 'find']);
Route::post('/tambah-mitra', [MitraController::class, 'store']);

// guest routes
Route::get('/product/show', [GuestCOntroller::class, 'showProducts']);
Route::get('/product/show/category/{category_id}', [GuestCOntroller::class, 'getProductByCategory']);
Route::get('product/search', [GuestCOntroller::class, 'searchProduct']);
