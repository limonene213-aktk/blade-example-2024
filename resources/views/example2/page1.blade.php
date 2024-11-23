@extends('layouts.app')

@section('title', 'Page 1')

@section('content')
    <h2>ページ１へようこそ！</h2>
    <p>ここがページ１のコンテンツ内容です.</p>
    <a href="{{ url('/example2') }}">Homeに戻る</a>
    <br>
    <a href="{{ url('/example2/page2') }}">Page 2に移動する</a>
@endsection
