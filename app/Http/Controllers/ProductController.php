<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductController extends Controller
{
    //
    public function add_product(){
        return view('admin.pages.add_product');

    }

    public function show($id)
    {
      return view('pages.product_detail', ['product' => Product::findOrFail($id)]);

    }

    // public function addToCart($id)
    // {

    // }
}
