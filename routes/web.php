<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\TypeController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/types',TypeController::class);
Route::post('/types/exportPdf',[TypeController::class,'exportPdf'])->name('types.export-pdf');

Route::resource('/items',ItemController::class);
Route::post('/items/exportPdf',[ItemController::class,'exportPdf'])->name('items.export-pdf');