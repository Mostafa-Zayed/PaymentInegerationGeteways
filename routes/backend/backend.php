<?php

use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\SettingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',function(){
    dd('backend');
});

Route::get('/currency',[CurrencyController::class,'index']);
Route::resource('categories',CategoryController::class)->where(['category' => '[0-9]+']);
Route::group(['prefix' => 'settings'] , function(){
    Route::get('shipping-methods/{type}',[SettingController::class,'editShippingMethod']);
});
