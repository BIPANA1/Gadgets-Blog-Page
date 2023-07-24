<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FrontendController::class, 'welcome']);
Route::get('/description/{id}',[FrontendController::class,'description']);

Auth::routes();

Route::group(['middlware' => ["auth", "admin"]], function () {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/product', [BlogController::class, 'product']);
    Route::get('/addProduct', [HomeController::class, 'addProduct']);
    Route::get('/addItem', [HomeController::class, 'addItem']);
    Route::post('/create-product', [BlogController::class, 'create']);
    Route::get('/delete-post/{id}',[BlogController::class,'delete']);
    Route::get('/edit/{id}',[BlogController::class,'edit']);
    Route::post('/edit-blog/{id}',[BlogController::class,'editBlog']);
});
