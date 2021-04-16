<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('listapi/{id?}',[PrivacyController::class ,'listapi']);
Route::post('addapi',[PrivacyController::class, 'addapi'] );
Route::put('updateapi',[PrivacyController::class, 'updateapi'] );
Route::delete('deleteapi/{id}',[PrivacyController::class ,'deleteapi']);
Route::get('search/{firstname}',[PrivacyController::class ,'search']);