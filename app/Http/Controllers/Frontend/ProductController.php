<?php

namespace App\Http\Controllers\Frontend;

use App\Website;
use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index (){
        $products = Product::orderBy('id')->get();
        $website = Website::find(1);
        return view('frontend.products', compact('products', 'website'));
    }
}
