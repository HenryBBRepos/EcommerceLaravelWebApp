<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Product;

class PagesController extends Controller
{
    //

    public function index(){
       $products = Product::all();
       //$products = Product::paginate(2);
        return view('pages.index', ['products' => $products]);
    }
    public function cart(){
        return view('pages.cart');
    }
    public function checkout(){
        return view('pages.checkout');
    }
    public function product_detail(){
        return view('pages.product_detail');
    }
    public function wishlist(){
        return view('pages.wishlist');
    }
    public function searchlist(){
        return view('pages.searchlist');
    }

    public function all_product(){
        return view('admin.pages.all_product');
    }
    public function dashboard(){
        return view('admin.pages.dashboard');

    }

    // public function signup(){
    //     return view('pages.signup');
    // }

    public function login(){
        return view('pages.login');
    }

}
