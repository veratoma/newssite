<?php

use App\Http\Controllers\GreetingsController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoryController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hello', [GreetingsController::class,'index'])->name('hello');

// /news/1/show        - Страница вывода конкретной новости
Route::get('/news/{id}/show', [NewsController::class,'show'])->where(name:'id', expression:'\d+')->name('news.show');

// /category           - Страница категорий новостей
Route::get('/category', [CategoryController::class,'index'])->name('category');

// /category/2/show     - Страница вывода новостей по конкретной категории
Route::get('/category/{categoryid}/show', [CategoryController::class,'show'])->where(name:'categoryid', expression:'\d+')->name('category.show');