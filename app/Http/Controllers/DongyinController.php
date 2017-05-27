<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DongyinController extends Controller
{
    public function index()
    {
        return view('/');
    }

    public function introduce()
    {

    }

    public function products()
    {
        $products = Product::where('is_hidden','F')->paginate(5);
        return view('dongyin.products',compact('products'));
    }
}
