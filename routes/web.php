<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DompdfController;

Route::get('/', function () {
    return view('test');
});

// PDF生成へのルート
Route::get('dompdf/pdf' , [DompdfController::class , 'generatePDF'])->name('pdf');