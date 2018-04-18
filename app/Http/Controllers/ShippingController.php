<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Shipping;
class ShippingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $items =  Shipping::All();

        return view('products.orderList', compact('items'));

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
        $shipping = new Shipping;
        
        $cardValidation  = request('creditcard');
        $id = request('id'); 
        if($cardValidation === "4111 1111 1111 1111"){
            return redirect()->action('ProductsListController@error', [$id]);
        }
        elseif($cardValidation === "5105 1051 0510 5100"){
        $shipping->name = request('name');
        $shipping->email = request('email');
        $shipping->address = request('address');
        $shipping->address2 = request('address2');
        $shipping->city = request('city');
        $shipping->state = request('State');
        $shipping->zip = request('zip');
        $shipping->creditCard = request('creditcard');
        $shipping->expiration = request('expiration');
        $shipping->ccv = request('ccv');
        $shipping->fullfilled = 1;
        $shipping->product = request('product');

        $shipping->save();
        $id = request('id');
        return redirect()->action('ProductsListController@thanksPage', [$id]);
        }
        else{
            return redirect('/cozy');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function show(Shipping $shipping)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function edit(Shipping $shipping)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shipping $shipping)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Shipping  $shipping
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shipping $shipping)
    {
        //
    }
}
