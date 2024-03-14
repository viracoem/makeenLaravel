<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

// User Routs
Route::get('/users/create', function () {
    return view('users.create');
});

// Product Get Routes
Route::get('/products/create', function () {
    return view('products.create');
});

Route::get('/products/edit/{id}', function ($id) {

    $product = DB::table('products')->where('id', $id)->first();
    return view('products.edit', ['product' => $product]);
});

Route::get('/products/index', function () {

    $products = DB::table('products')->get();
    return view('products.index', ["products" => $products]);
});

// Product Post Routes
Route::post('/products/create', function (Request $request) {

    DB::table('products')->insert([
        "name" => $request->name,
        "amount" => $request->amount,
        "description" => $request->description,
        "color" => $request->color,
    ]);

    return "Product added successfully";
});

Route::post('/products/edit/{id}', function (Request $request, $id) {

    DB::table('products')->where('id', $id)->update([
        "name" => $request->name,
        "amount" => $request->amount,
        "description" => $request->description,
        "color" => $request->color,
    ]);

    return "Product updated successfully";
});

// Products Delete Route
Route::delete('/products/delete/{id}', function ($id) {

    DB::table('products')->where('id', $id)->delete();

    return redirect('/products/index');
});
