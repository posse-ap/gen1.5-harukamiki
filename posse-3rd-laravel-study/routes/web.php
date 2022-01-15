<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Auth\LoginController;
// use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;

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

// // ログインページ
// Route::get('/login', 'Auth\LoginController@index');
// // Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
// Route::post('/login', 'Auth\LoginController@login');
// // Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// quizyのページ
Route::get('/quiz/{id?}','QuizyController@index')->middleware('auth');

// 質問内容CRUDページ
Route::resource('/crud', 'QuestionsEditController');

Auth::routes();
// TODO 調べる↑

Route::get('/home', 'HomeController@index')->name('home');
