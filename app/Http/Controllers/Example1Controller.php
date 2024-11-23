<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example1Controller extends Controller
{
    public function showExample1()
    {
        $title = "タイトル：Hello Blade!";
        $message = "メッセージ：簡単な例を示しました";

        return view('example1', compact('title', 'message'));
    }
}
