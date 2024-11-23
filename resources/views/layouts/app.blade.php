<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>

    <!-- 共通のヘッダー -->
    <header>
        <h1>Laravel Blade理解のためのサンプルコード２</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/example2') }}">Homeに戻る</a></li>
                <li><a href="{{ url('/example2/page1') }}">Page 1へ</a></li>
                <li><a href="{{ url('/example2/page2') }}">Page 2へ</a></li>
                <!--ここに名前付きルートの存在での分岐をいれる（他の場所でもOK）-->
                @if(Route::has('example1'))
                    <li><a href="{{ route('example1') }}">Example1へ</a></li>
                @endif
            </ul>
        </nav>
    </header>

    <!-- 子ビューのコンテンツがここに挿入される -->
    <div class="content">
        @yield('content')
    </div>

    <!-- 共通のフッター -->
    <footer>
        <p>&copy; 2024 サンプルコード＠宇品</p>
    </footer>

</body>
</html>
