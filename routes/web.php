<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// PDF生成へのルート
Route::get('dompdf/pdf' , [DompdfController::class , 'generatePDF']);

