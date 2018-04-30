<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = products::all();


        return view('products.index', compact('products'));
    }

    public function show()
    {

        $products = products::all();

        //return $products;

        return view('products', compact('products'));


    }

    public function showOrderForm($id)
    {

        $product = products::find($id);

        //return $products;

        return view('checkout', compact('product'));


    }


}



