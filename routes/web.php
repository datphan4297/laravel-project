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

Route::get('/', 'ThemeController@goiTrangChu');
Route::get('/san-pham', 'ThemeController@goiSanPham');
Route::get('/category', 'ThemeController@goiCategory');
Route::get('/kim', 'AdminDashboard@goiKim');