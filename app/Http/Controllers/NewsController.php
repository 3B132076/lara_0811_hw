<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        return view('news');  // 回傳 news.blade.php 視圖
    }
}
