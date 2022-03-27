<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function index()
    {
        $products = Product::get();
        return view('landing.index',compact('products'));
    }


    public function about()
    {
        return view('landing.about');
    }

    public function contact()
    {
        return view('landing.contact');
    }
}
