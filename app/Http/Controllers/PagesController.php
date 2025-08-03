<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
        return view('home/about');
    }
    public function job()
    {
        return view('pages/job/job');
    }
    public function job2()
    {
        return view('pages/job/job2');
    }
    public function job3()
    {
        return view('pages/job/job3');
    }
    public function job4()
    {
        return view('pages/job/job4');
    }
    public function jobDetails()
    {
        return view('pages/job/jobDetails');
    }
    public function portfolio()
    {
        return view('pages/portfoliyo/portfolio');
    }
    public function portfolio2()
    {
        return view('pages/portfoliyo/portfolio2');
    }
    public function portfolio3()
    {
        return view('pages/portfoliyo/portfolio3');
    }
    public function pageError()
    {
        return view('pages/pageError');
    }
    public function faq()
    {
        return view('pages/faq');
    }
    public function login()
    {
        return view('pages/login');
    }
    public function signup()
    {
        return view('pages/signup');
    }
    public function team()
    {
        return view('pages/team');
    }
    public function testimonial()
    {
        return view('pages/testimonial');
    }
}
