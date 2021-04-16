<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PrivacyController;


Route::get('/', function () {
    return view('index');
});

Route::get('contact',[PrivacyController::class ,'contact']);
Route::post('contact',[PrivacyController::class, 'insert'] );
Route::get('list',[PrivacyController::class ,'show']);
Route::get('edit/{id}',[PrivacyController::class, 'showdata'] );
Route::post('edit/',[PrivacyController::class, 'update'] );
Route::get('delete/{id}',[PrivacyController::class, 'delete'] );

//produt
Route::get('product',[PrivacyController::class ,'product']);
Route::get('listproduct',[PrivacyController::class ,'listproduct']);
Route::get('addproduct',[PrivacyController::class ,'addproduct']);
Route::post('addproduct',[PrivacyController::class, 'insertproduct'] );
Route::get('deleteproduct/{id}',[PrivacyController::class, 'deleteproduct'] );


