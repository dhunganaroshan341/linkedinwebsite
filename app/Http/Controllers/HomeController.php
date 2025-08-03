<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function about()
    {
        return view('home/about');
    }
    public function contact()
    {
        return view('home/contact');
    }
    public function index()
    {
        return view('home/index');
    }
    public function index2()
    {
        return view('home/index2');
    }
    public function index3()
    {
        return view('home/index3');
    }
    public function index4()
    {
        return view('home/index4');
    }
    public function index5()
    {
        return view('home/index5');
    }
    
}
