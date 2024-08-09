<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Dompdf\Dompdf;
use Dompdf\Options; 

// Debug用にLogを残すため追加
//use Illuminate\Support\Facades\Log;

// 駐車券のPDFを発行

class DompdfController extends Controller
{
    //PDFの生成
    public function generatePDF(Request $request)
    {
        $options = new Options();
        $options->set('isFontSubsettingEnabled' , true);
        $dompdf = new Dompdf($options);

        $html = view('pdftest')->render();

        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4' , 'potrait');
        $dompdf->render();

        return $dompdf->stream('document.pdf');

    // // return view( 'pdftest');
    
    //     // 画像データの準備
    //     // $format = public_path('images/parkticket.jpg') ;
    //     // $format_data = base64_encode(file_get_contents($format));
    //     // その他の表示データ
       
       
    //     $data = [
    //         'name' => '山田太郎' , 
    //         'zekken' => '123' , ];
        
    //     // Viewのdompdf/pdf.blade.php を使ってPDFを生成
    //     $pdf = PDF::loadView('dompdf.pdf' , compact('data'));
    //     // 用紙をA4タテに設定
    //     $pdf->setPaper('A4' , 'portrait');
        
    //     // 必要最低限のフォントのみをPDFへ埋め込み設定
    //     $pdf->setOptions([
    //         'isFontSubsettingEnabled' => true, // 必要最低限のフォントのみを埋め込む
    //         // 一時的にコメントアウト
    //         // 'defaultFont' => 'ipag', // デフォルトフォントを設定
    //     ]);

    //     // PDFファイルを生成してWebへ表示
    //     return $pdf->stream('駐車券.pdf');
    // }
    }
}
