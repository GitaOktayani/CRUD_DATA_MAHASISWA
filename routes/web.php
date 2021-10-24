<?php

use App\Http\Controllers\ViewController;
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

Route::get('/', [App\Http\Controllers\ViewController::class,'index']);

Route::post('/simpan', [App\Http\Controllers\ViewController::class,'prosesSimpan']);

Route::get('/edit/{id}', [App\Http\Controllers\ViewController::class,'edit']);

Route::post('/update', [App\Http\Controllers\ViewController::class,'update']);

Route::get('/delete/{id}', [App\Http\Controllers\ViewController::class,'deleteData']);