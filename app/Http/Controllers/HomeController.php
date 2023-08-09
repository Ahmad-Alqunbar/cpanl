<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use View;

class HomeController extends Controller
{
    public function home()
    {
        $products=Product::paginate(10);
        return view('home',compact('products'));
    }
}
