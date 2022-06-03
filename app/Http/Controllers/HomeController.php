<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function home(){
        return view('homepage');
    }
    public function aboutUs(){
        return view('about');
    }

    public function shop(){
        return view('shop');
    }

    public function camera(){
        return view('camera');
    }

    public function cart(){
        return view('cart');
    }

    public function checkout(){
        return view('checkout');
    }

    public function details(){
        return view('details');
    }

    public function laptop(){
        return view('laptop');
    }

    

    public function mobile(){
        return view('mobile');
    }
    public function tablet(){
        return view('tablet');
    }
}
