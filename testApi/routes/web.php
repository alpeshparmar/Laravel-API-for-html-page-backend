<?php

// use App\Http\Controllers\AuthController;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClaimContoller;
use App\Http\Controllers\ShopController;
use App\Http\Middleware\Authenticate;
use App\Http\Middleware\WebGuard;
use App\Models\Claim;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome1');
});
Route::post('/',[AuthController::class,'login'])->name('login');

Route::get('/claim', function () {
    return view('promoClaim1');
});

Route::post('/claims',[ClaimContoller::class,'claim'])->name('claim');


Route::get('/shop', function () {
    return view('shop1');
})->name('shopRoute');




