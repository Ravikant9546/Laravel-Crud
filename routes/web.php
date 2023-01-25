<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\NewCategoryController;
use App\Http\Controllers\EditCategoryController;
use App\Http\Controllers\DeleteCategoryController;

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

Route::get('/',[CategoryController::class,'index']);
Route::get('/category-create', [NewCategoryController::class, 'create']);
Route::post('/category-store', [NewCategoryController::class, 'store']);
Route::get('/category-edit/{id}', [EditCategoryController::class, 'edit']);
Route::put('/category-update/{id}', [EditCategoryController::class, 'update']);
Route::delete('/category-delete/{id}', [DeleteCategoryController::class, 'destroy']);