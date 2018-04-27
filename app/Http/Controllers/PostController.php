<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
        $orders = new \App\Post;

        // Create a new post
        $orders->firstName = request('first-name');
        $orders->lastName = request('last-name');
        $orders->address = request('address');
        $orders->city = request('city');
        $orders->state = request('state');
        $orders->zipcode = request('zip-code');
        $orders->creditCard = request('credit-card');
        $orders->product = request('product');
        $orders->productPrice = request('productPrice');

        if ($orders->creditCard != 5105105105105100){
            echo "Credit Card is invalid, please try again";
            dd($orders->creditCard); 
        }
            
        else{
            // Save message to database
            $orders->save();
            // Redirect to thank you page.
            return redirect('/thankyou');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
