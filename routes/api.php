<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\logisticController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DeliveryController;


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

Route::post('/delivery/fast', [logisticController::class, 'fastDelivery'])->name('delivery.fast');
Route::post('/delivery/standart', [logisticController::class, 'standartDelivery'])->name('delivery.standart');

Route::apiResource('services', ServicesController::class);

