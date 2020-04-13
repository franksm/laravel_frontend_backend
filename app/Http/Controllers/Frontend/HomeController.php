<?php

namespace App\Http\Controllers\Frontend;

use App\Website;
use App\Home;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index (){
        $home = Home::find(1);
        $website = Website::find(1);
        return view('frontend.index', compact('home', 'website'));
    }
}
