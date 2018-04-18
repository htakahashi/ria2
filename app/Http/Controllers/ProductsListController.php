<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\productsList;

class ProductsListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products_lists =  productsList::All();

        return view('cart', compact('products_lists'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\productsList  $productsList
     * @return \Illuminate\Http\Response
     */
    public function show(productsList $item)
    {
     
        return view('products.show', compact('item'));

    }

    public function showCart(productsList $cart)
    {
       
        return view('products.checkout', compact('cart'));

    }

    public function thanksPage(productsList $thanks)
    {        
        return view('thanks', compact('thanks'));
    }
    
    public function error(productsList $error)
    {    
        
        return view('products.error', compact('error'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\productsList  $productsList
     * @return \Illuminate\Http\Response
     */
    public function edit(productsList $productsList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\productsList  $productsList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, productsList $productsList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\productsList  $productsList
     * @return \Illuminate\Http\Response
     */
    public function destroy(productsList $productsList)
    {
        //
    }
}
