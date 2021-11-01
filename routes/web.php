<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Response;


//お問い合わせ入力ページ
Route::get('/', [ContactController::class, 'index']);
//確認ページ

Route::post('/contact/create', [ContactController::class, 'create']);

Route::post('/contact/store', [ContactController::class, 'store']);