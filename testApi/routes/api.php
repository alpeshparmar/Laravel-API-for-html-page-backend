<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClaimContoller;
use App\Http\Controllers\FollowContoller;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\unshopController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('login',[AuthController::class, 'login']);
Route::post('claims/',[ClaimContoller::class, 'claim']);
Route::get('shops/{type?}',[ShopController::class, 'shop']);
// Route::post('/change/follow',[FollowContoller::class, 'follow']);


Route::post('/change/follow',[FollowContoller::class, 'follow']);
Route::post('/change/unfollow',[unshopController::class, 'unfollow']);



Route::group(['middleware' => ['api','cors']], function () {
});