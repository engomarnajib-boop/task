<?php

use App\Http\Controllers\BooksController;
use App\Http\Controllers\ProductsControler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('books')->group(function(){
Route::get('/',[BooksController::class ,'index']);
Route::get('/{id}',[BooksController::class , 'show']);
Route::post('/',[BooksController::class , 'store']);
Route::put('/{id}',[BooksController::class , 'update']);
Route::delete('/{id}',[BooksController::class , 'destroy']);
});
Route::prefix('products')->group(function(){
Route::get('/',[ProductsControler::class,'index']);
Route::get('/{id}',[ProductsControler::class,'show']);
Route::post('/',[ProductsControler::class,'store']);
Route::put('/{id}',[ProductsControler::class,'update']);
Route::delete('/{id}',[ProductsControler::class,'destroy']);


});
