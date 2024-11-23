<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Bladeのシンプルなサンプルファイル</title>
</head>
<body>

    <!--コントローラにより、ここにタイトルが差し込まれる-->
    <h1>{{ $title }}</h1>
    
    <!--コントローラにより、ここにメッセージが差し込まれる-->
    <p>{{ $message }}</p>

    <!--この部分が条件分岐（ルートがある場合にリンク表示）-->
    @if(Route::has('example2'))
        <li><a href="{{ route('example2') }}">Example2へ</a></li>
    @endif

</body>
</html>
