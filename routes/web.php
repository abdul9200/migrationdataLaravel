<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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

#Route::get('/', [App\Http\Controllers\studentControllers::class, 'home'])->name('home');
Route::get('/books', [App\Http\Controllers\studentControllers::class, 'books'])->middleware([]);
Route::get('/about', [App\Http\Controllers\studentControllers::class, 'about'])->middleware([]);
Route::get('/signin', [App\Http\Controllers\studentControllers::class, 'signin'])->middleware([]);
Route::get('/signup', [App\Http\Controllers\studentControllers::class, 'signup'])->middleware([]);
Route::get('/team', [App\Http\Controllers\studentControllers::class, 'team'])->middleware([]);
Route::get('/testImage', [App\Http\Controllers\studentControllers::class, 'getProduct'])->middleware([]);
Route::get('/like/{id}', [App\Http\Controllers\studentControllers::class, 'like'])->middleware([]);
Route::get('/', function () {
    return view('admin.adminhome');
});
#Route::post('/addBook', [App\Http\Controllers\studentControllers::class, 'addBook'])->middleware([]);
Route::get('/test', [App\Http\Controllers\studentControllers::class, 'showToken'])->middleware([]);





Route::get('/', function () {
    return view('admin.adminhome');
});
Route::get('/category',[AdminController::class,"category"]);
Route::get('/deletecat/{id}',[AdminController::class,"deletecategory"]);
Route::get('/addcat',[AdminController::class,"addcat"]);
Route::post('/uploadcat',[AdminController::class,"uploadcat"]);
Route::get('/deletebook/{id}',[AdminController::class,"deletebook"]);
Route::get('/book',[AdminController::class,"book"]);
Route::get('/addbook',[AdminController::class,"addbook"]);
Route::post('/uploadbook',[AdminController::class,"uploadbook"]);
Route::get('/copy',[AdminController::class,"copy"]);
Route::post('/uploadcopy',[AdminController::class,"uploadcopy"]);
Route::get('/addcopy',[AdminController::class,"addcopy"]);
Route::get('/deletecopy/{id}',[AdminController::class,"deletecopy"]);
Route::get('/suggestion',[AdminController::class,"suggestion"]);
Route::get('/deletesuggestion/{id}',[AdminController::class,"deletesuggestion"]);
Route::get('/reservation',[AdminController::class,"reservation"]);
Route::get('/validateresa/{id}',[AdminController::class,"validateresa"]);
Route::get('/terminateresa/{id}',[AdminController::class,"terminateresa"]);
