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

Route::get('/', function () {
    return view('welcome');

});

Route::Get('/article/(id)','ArticleController@show')->name('show_article');

Auth::routes();
    
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth','prefix' => 'admin'], function ()
{
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('admin_index');
    Route::get('/create', [App\Http\Controllers\ArticleController::class, 'create'])->name('create_article');
    Route::post('/store', [App\Http\Controllers\ArticleController::class, 'store'])->name('store_article');
    Route::put('/update', [App\Http\Controllers\ArticleController::class, 'update'])->name('update_article');
    Route::put('/delete', [App\Http\Controllers\ArticleController::class, 'destroy'])->name('delete_article');

});