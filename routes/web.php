<?php

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

Route::get('/', [App\Http\Controllers\HomeController::class, 'news_section']);
Route::get('news/article_{id}', [App\Http\Controllers\HomeController::class, 'news_current'])->where('id', '\d+');
Route::get('/shop', [\App\Http\Controllers\ShopController::class, 'index']);
