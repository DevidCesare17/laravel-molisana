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
Route::get('/home', function () {
    return view('home');
})->name('home');


Route::get('/products', function () {
    $data = config('pasta');

    $type_pst = [];

    foreach ($data as $key => $products) {
      $products['id'] = $key;
      $type_pst[$products["tipo"]][] = $products;
    }

    return view('products', ['type_pst' => $type_pst]);
})->name('products');


Route::get('/products/show/{id}', function($id) {
    if (config("pasta.$id") == null) {
      abort(404);
    }

    $products = config("pasta.$id");

    $prev_id = $id - 1;
    $next_id = $id + 1;

    return view('desc_products', ['data' => $products, "next_id" => $next_id, "prev_id" => $prev_id]);
})->where('id', '[0-9]+')->name('desc_products');

Route::get('/news', function () {
    return view('news');
})->name('news');
