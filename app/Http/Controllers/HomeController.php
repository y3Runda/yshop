<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::where('id',5)->first();
        echo $products->title;
        /*foreach ($products as $product) {
            echo 'Title: '.$product->title.' | '.$product->price.'$';
            echo '<br>';
        }*/
        //return view('home.index');
    }
}
