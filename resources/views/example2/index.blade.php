@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h2>ようこそ、Bladeテンプレートの世界へ！</h2>
    <p>ここがこのページ（home）のコンテンツです。</p>
    <a href="{{ url('/example2/page1') }}">Go to Page 1</a>
    <br>
    <a href="{{ url('/example2/page2') }}">Go to Page 2</a>
@endsection
