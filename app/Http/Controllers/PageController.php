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

    public function ReviewNuocHoa()
    {
        return view('review-nh');
    }
    public function contact()
    {
        return view('contact');
    }
}
