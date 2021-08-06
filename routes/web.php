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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/eventos/{slug}', [\App\Http\Controllers\HomeController::class, 'show']);

Route::get('/admin/events/index', [\App\Http\Controllers\Admin\EventController::class,'index']);
Route::get('/admin/events/create', [\App\Http\Controllers\Admin\EventController::class,'create']);
Route::post('/admin/events/store', [\App\Http\Controllers\Admin\EventController::class,'store']);
Route::get('/admin/events/update/{event}', [\App\Http\Controllers\Admin\EventController::class,'update']);
Route::get('/admin/events/destroy/{event}', [\App\Http\Controllers\Admin\EventController::class,'destroy']);
