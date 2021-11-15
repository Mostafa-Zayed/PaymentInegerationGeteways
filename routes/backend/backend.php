<?php

use App\Http\Controllers\Backend\CurrencyController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\GetewayController;
use App\Http\Controllers\Backend\SettingController;
use App\Http\Controllers\Backend\GetewaySettingController;
use App\Http\Controllers\Backend\PaypalController;
use App\Http\Controllers\Backend\StripeController;
use App\Http\Controllers\Backend\FatoorahController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\Backend\ChildCategoryController;
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

Route::resource('currencies',CurrencyController::class);
Route::resource('geteways',GetewayController::class);
Route::resource('geteway-settings',GetewaySettingController::class);
Route::get('/paypal/payment',[PaypalController::class,'payment'])->name('payment');
Route::resource('categories',CategoryController::class);
Route::resource('sub-categories',SubCategoryController::class);
Route::resource('child-categories',ChildCategoryController::class);
Route::resource('settings',SettingController::class);

Route::get('/stripe',[StripeController::class,'index']);
Route::get('/fatoorah',[FatoorahController::class,'index']);
