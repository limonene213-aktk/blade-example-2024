<?php

//【重要】元々あった内容をコメントアウトしてから以下を追記すること！
// 「地図」を与えておく
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Example1Controller;
use App\Http\Controllers\Example2Controller;

//以下、ルーティング定義

//example1用
Route::get('/example1', 
    [
        Example1Controller::class, 'showExample1'
    ])->name('example1');

//Example2用
// Home Page
Route::get('/example2', 
    [
        Example2Controller::class, 'index'
    ])->name('example2');

// Page 1
Route::get('/example2/page1', 
    [
        Example2Controller::class, 'page1'
    ]);

// Page 2
Route::get('/example2/page2', 
    [
        Example2Controller::class, 'page2'
    ]);


//元からあった設定
Route::get('/', function () {
    return view('welcome');
});

