<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CreateTable;
use App\Http\Controllers\Slide;
use App\Providers\AppServiceProvider;

use App\Http\Controllers\ProcessForm;
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
// Route::get("/",function(){
//     return view('Layouts.masterLayout');
// });
// Route::get("/", function () {
//     return view('Pages.trangchu');
// });
// Route::get("/", function () {
//     return view('partical.Header');
// }); 
Route::get("/",[ProductController::class,'index']);
Route::get("new", [CreateTable::class, 'new']);
// Route::get("/Home", [Sl::class, 'getIndex']);
// Route::get("type", [AppServiceProvider::class, 'boot']);
Route::get("/form",[ProcessForm::class,'index'])->name('add-Form');
Route::post("/form",[ProcessForm::class,'store']);
Route::get("/admin", [ProcessForm::class,'showAdmin'])->name('showProduct');
Route::get("admin-edit-form/{id}", [ProcessForm::class, 'getID']);
Route::post("/admin-edit/id={id}", [ProcessForm::class, 'Edit']);
Route::post("admin-delete/{id}", [ProcessForm::class, 'Delete']);
Route::get("detail/{id}", [ProcessForm::class, 'Detail']);
Route::get("/register", [ProductController::class,'showRegister']);
Route::post("/register", [ProductController::class,'Register']);
Route::get("/login", [ProductController::class, 'showLogin']);
Route::post("/login", [ProductController::class, 'Login']);
Route::get('/logout', [ProductController::class, 'Logout']);