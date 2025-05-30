<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function service1()
    {
        return view('service1');
    }
    public function service2()
    {
        return view('service2');
    }
    public function service3()
    {
        return view('service3');
    }
    public function service4()
    {
        return view('service4');
    }
    public function service5()
    {
        return view('service5');
    }
    public function service6()
    {
        return view('service6');
    }
    public function casesingle()
    {
        return view('case-single');
    }
    public function blogsingle()
    {
        return view('blog-single');
    }
    public function blog()
    {
        return view('blog');
    }
    public function blogleft()
    {
        return view('blog-left');
    }
    public function blogright()
    {
        return view('blog-right');
    }
    public function case()
    {
        return view('case');
    }
    public function testimonials()
    {
        return view('testimonials');
    }
    public function team()
    {
        return view('team');
    }
    public function pricing()
    {
        return view('pricing');
    }
    public function fournotfout()
    {
        return view('404');
    }
    public function faq()
    {
        return view('faq');
    }
}
