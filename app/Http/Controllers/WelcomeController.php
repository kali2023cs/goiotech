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
    public function premiumServices()
    {
        return view('premiumServices');
    }
    public function seo()
    {
        return view('seo');
    }
    public function service3()
    {
        return view('service3');
    }
    public function eCommerce()
    {
        return view('eCommerce');
    }
    public function mobilApp()
    {
        return view('mobilApp');
    }
    public function websiteDevelopment()
    {
        return view('websiteDevelopment');
    }
    public function hotelManagement()
    {
        return view('hotelManagement');
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
