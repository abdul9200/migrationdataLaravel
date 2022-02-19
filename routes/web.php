<?php
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|AdminController
*/
Route::get('/category',[AdminController::class,"category"]);
Route::get('/deletecat/{id}',[AdminController::class,"deletecategory"]);
Route::get('/book',[AdminController::class,"book"]);
Route::get('/deletebook/{id}',[AdminController::class,"deletebook"]);
Route::get('/user',[AdminController::class,"user"]);
Route::get('/addcat',[AdminController::class,"addcat"]);
Route::get('/deleteuser/{id}',[AdminController::class,"deleteuser"]);
Route::post('/uploadcat',[AdminController::class,"uploadcat"]);
Route::post('/uploadbook',[AdminController::class,"uploadbook"]);
Route::get('/suggestion',[AdminController::class,"suggestion"]);
Route::get('/deletesuggestion/{id}',[AdminController::class,"deletesuggestion"]);
Route::get('/addbook',[AdminController::class,"addbook"]);

Route::get('/', function () {
    return view('admin.adminhome');
});
