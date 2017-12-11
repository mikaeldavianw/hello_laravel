<?php

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

$controller  = function () {
    return view('welcome');
};

Route::get('/', $controller);

// Membuat controller menggunakan class
Route::get('/welcome2', "UserController@welcome");

Route::get('/about', "UserController@about");

Route::get('/contact', "UserController@contact");

Route::get('/product/discount', "ProductController@discount");

Route::get('/products', "ProductController@index");

Route::get('/products/add', "ProductController@add");
Route::post('/products/add', "ProductController@add");

Route::get('products/detail/{product_id}', "ProductController@detail");

Route::get('products/edit/{product_id}', "ProductController@edit");
Route::post('products/edit/{product_id}', "ProductController@edit");

Route::post('products/delete', "ProductController@delete");

Route::post('/media', "MediaController@index");

//
// Route::get('/about', function () {
//     return "This is about page";
// });
//
// // Belajar Route Parameter
// Route::get('/profile/{username?}', function ($username="") {
//     return "This is profile page for user: ".$username;
// });
//
// Route::get('/profile/{username}/comment/{id}', function ($username, $id) {
//     return "Comment ID: ".$id. " for user ".$username;
// });
