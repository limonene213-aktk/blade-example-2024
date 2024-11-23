@extends('layouts.app')

@section('title', 'Page 2')

@section('content')
    <h2>This is Page 2</h2>
    <p>Here is the content for page 2.</p>
    <a href="{{ url('/example2') }}">Back to Home</a>
    <br>
    <a href="{{ url('/example2/page1') }}">Go to Page 1</a>
@endsection
