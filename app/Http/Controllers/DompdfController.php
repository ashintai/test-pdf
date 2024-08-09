<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;


// Debug用にLogを残すため追加
//use Illuminate\Support\Facades\Log;

// 駐車券のPDFを発行

class DompdfController extends Controller
{
    //PDFの生成
    public function generatePDF(Request $request)
    {
       
       $pdf=\PDF::loadView('dompdf.pdf');

       $pdf->setPaper('A4' , 'portrait');
        
       return $pdf->stream('駐車券.pdf');

    }
}
