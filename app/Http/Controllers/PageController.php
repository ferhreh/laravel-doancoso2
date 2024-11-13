<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function form()
    {
        return view('form');
    }

    public function about()
    {
        return view('about');
    }

    public function brands()
    {
        return view('brands');
    }

    public function perfumes()
    {
        return view('perfumes');
    }

    public function news()
    {
        return view('news');
    }

    public function contact()
    {
        return view('contact');
    }
}
