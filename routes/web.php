<?php

use App\Http\Controllers\MyBlogController;
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

Route::get('/','MyBlogController@index1');

Route::get('/achievement','MyBlogController@index');

Route::get('/introduction','MyBlogController@index2');

// Route::get('/{slug',[MyBlogController::class,'index']);


// Route::get('/here', function () {
//     return view('test');
// });
