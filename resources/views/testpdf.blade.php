<!-- PDF漢字出力テスト用フォーマット -->
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>駐車券PDF出力</title>
        <style>
        /* dompdf日本語文字化け対策 */
            @font-face {
                font-family: ipag;
                font-style: normal;
                font-weight: normal;
                src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
            }
            @font-face {
                font-family: ipag;
                font-style: bold;
                font-weight: bold;
                src: url('{{ storage_path('fonts/ipag.ttf') }}') format('truetype');
            }
        </style>
    </head>
    <body>
        <div >   
                ナンバー：{{ $data['zekken'] }}<br>
                {{ $data['name'] }}
        </div>
    </body>
</html>
