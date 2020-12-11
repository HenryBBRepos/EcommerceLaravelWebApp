<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        return view('pages.index');
    }
    public function cart(){
        return view('pages.cart');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function details(){
        return view('pages.details');
    }
    public function wishlist(){
        return view('pages.wishlist');
    }
    public function searchlist(){
        return view('pages.searchlist');
    }

}
