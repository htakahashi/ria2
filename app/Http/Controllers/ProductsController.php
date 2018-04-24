<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\User;
use App\Order;
use DB;
use App\Rules\checkcardnum;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }


    public function show(Product $product)//Product::find($id);
    {
        return view('products.show', compact('product'));
    }


    public function checkout(Product $product)
    {        
        $user = auth()->user();
        return view('orders.checkout', compact('product', 'user'));
    }


    public function update_user (Product $product) 
    {
    //validation
      $this->validate( request(), [
        'firstname' => 'required',
        'lastname' => 'required',
        'address' => 'required',
        'city' => 'required',
        'state' => 'required',
        'zip' => 'required',
        'creditcard' => ['required', new checkcardnum()],
      ]);

    //update user
    $this->updateUser();

    return redirect('/checkout/'.$product->id.'/thanks');
    }



    public function thanks (Product $product) 
    {
        //get user
        $user = auth()->user();

        //relation with user and product
        $user->products()->attach($product);

        return view('orders.thank', compact('user', 'product'));
    }


    public static function updateUser ()
    { 
      return DB::table('users')
            ->where('id', auth()->user()->id )
            ->update([
                'firstname' => request('firstname'),
                'lastname' => request('lastname'),
                'address' => request('address'),
                'city' => request('city'),
                'state' => request('state'),
                'zip' => request('zip'),
            ]);
    }

}
