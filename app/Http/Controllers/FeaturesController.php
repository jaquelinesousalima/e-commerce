<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeaturesController extends Controller
{
    public function showShopingCart()
    {
        return view('shoping-cart');
    }
}
