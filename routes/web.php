<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CreateTable;
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
Route::get("/",[CreateTable::class,'productTable']);
Route::get("new", [CreateTable::class, 'new']);

