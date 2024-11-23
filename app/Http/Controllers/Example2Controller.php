<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Example2Controller extends Controller
{
    // ホームページ
    public function index()
    {
        return view('example2.index');
    }

    // Page 1
    public function page1()
    {
        return view('example2.page1');
    }

    // Page 2
    public function page2()
    {
        return view('example2.page2');
    }
}
