<?php

use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    $result  = DB::table('categories')->get();
    // dd($result);
    return view('welcome', ['categories' => $result]);
});
Route::get('/products', function () {
    $result = DB::table('products')->get();
    return view('products', ["products" => $result]);
});
Route::get('/categories', function () {
    return view('categories');
});
