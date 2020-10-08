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
/*---------------------------------------------------------*/
//查詢
Route::get('channels', function () {
    return view('channels.index');
});
//新增表單
Route::get('channels/create', function () {
    return view('channels.create');
});
//顯示單筆頻道資料
Route::get('channels/{id}', function ($id) {
    return view('channels.show');
})->where('id', '[0-9]+');
//修改表單
Route::get('channels/{id}/edit', function ($id) {
    return view('channels.edit');
})->where('id', '[0-9]+');

/*--------------------------------------------------------------*/
//查詢
Route::get('youtubers', function () {
    return view('youtubers.index');
});
//新增表單
Route::get('youtubers/create', function () {
    return view('youtubers.create');
});
//顯示單筆youtuber資料
Route::get('youtubers/{id}', function ($id) {
    return view('youtubers.show');
})->where('id', '[0-9]+');
//修改表單
Route::get('youtubers/{id}/edit', function ($id) {
    return view('youtubers.edit');
})->where('id', '[0-9]+');
