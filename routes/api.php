<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Use App\Http\Controllers\Api\SallerAuthController;



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
Route::post('newaccount', [SallerAuthController::class, 'createSaller'])->name('Saller.Create');
Route::post('login', [SallerAuthController::class, 'login'])->name('Saller.login');
Route::post('signOut', [SallerAuthController::class, 'signOut'])->name('Saller.signOut');
Route::post('refreshToken', [SallerAuthController::class, 'refresh'])->name('Saller.refresh');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});