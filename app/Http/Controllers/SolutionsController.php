<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SolutionsController extends Controller
{
    public function about()
    {
        return view('home/about');
    }

    public function service()
    {
        return view('solutions/service');
    }
    public function serviceDetails()
    {
        return view('solutions/serviceDetails');
    }
    public function serviceDetails2()
    {
        return view('solutions/serviceDetails2');
    }
    public function serviceDetails3()
    {
        return view('solutions/serviceDetails3');
    }
    public function serviceDetails4()
    {
        return view('solutions/serviceDetails4');
    }
    public function serviceDetails5()
    {
        return view('solutions/serviceDetails5');
    }
    public function serviceDetails6()
    {
        return view('solutions/serviceDetails6');
    }
}
