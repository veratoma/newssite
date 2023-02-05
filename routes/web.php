<?php

use App\Http\Controllers\GreetingsController;
use \App\Http\Controllers\NewsController;
use \App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Admin\IndexController as AdminController;
use \App\Http\Controllers\Admin\ConnectionController as AdminConnectionController;
use \App\Http\Controllers\Admin\OrderController as AdminOrderController;
use \App\Http\Controllers\Admin\NewsController as AdminNewsController;

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

// admin routes

Route::group (['prefix'=> 'admin'], static function() {

    Route::get('/', AdminController::class)->name('admin.index');

    Route::resource(name:'connection',controller: AdminConnectionController::class);

    Route::resource(name:'order',controller: AdminOrderController::class);


    Route::resource(name:'news', controller:AdminNewsController::class);
    });

Route::get('/hello', [GreetingsController::class,'index'])->name('hello');

// /news/1/show        - Страница вывода конкретной новости
Route::get('/news/{id}/show', [NewsController::class,'show'])->where(name:'id', expression:'\d+')->name('news.show');

// /category           - Страница категорий новостей
Route::get('/category', [CategoryController::class,'index'])->name('category');

// /category/2/show     - Страница вывода новостей по конкретной категории
Route::get('/category/{categoryid}/show', [CategoryController::class,'show'])->where(name:'categoryid', expression:'\d+')->name('category.show');

