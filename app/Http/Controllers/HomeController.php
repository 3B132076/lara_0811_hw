<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
public function index()
{
return view('home');  // 回傳 home.blade.php 視圖
}
}
