<?php

namespace App\Http\Controllers\Frontend;

use App\Website;
use App\Store;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index ()
    {
        $store = Store::find(1);
        $website = Website::find(1);
        return view('frontend.store', compact('store', 'website'));
    }
}
