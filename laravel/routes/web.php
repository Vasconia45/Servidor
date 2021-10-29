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

//Route::resource('/products', App\Http\Controllers\ProductController::class);

Route::get('/', function () {
    return 'Hello, World!';
});

Route::get('createproduct', function () {
    return view('createproduct');
});

Route::get('viewproducts', function () {
    return view('viewproducts');
});

Route::get('users/{id?}', function ($id = 'fallbackId') {
    return $id;
});




