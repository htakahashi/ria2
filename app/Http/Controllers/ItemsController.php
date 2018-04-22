<?php

namespace App\Http\Controllers;

use App\Item;
use App\Purchase;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  public function index()
  {
      $item = Post::get();
      $price = $item->price;

      return view('item');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
   public function show(Item $item, Purchase $purchase)
   {
       return view('item', compact('item', 'purchase'));
   }

   public function store(Purchase $purchase, Item $item)
   {
      $this->validate(request(), [
      'fName' => 'required|min:3',
      'lName' => 'required|min:3',
      'address' => 'required',
      'city' => 'required',
      'state' => 'required',
      'zip' => 'required',
      'card' => ['required', 'regex:(5105 1051 0510 5100|4111 1111 1111 1111)']
      ]);

      $purchase->product = request('product');
      $purchase->fName = request('fName');
      $purchase->lName = request('lName');
      $purchase->address = request('address');
      $purchase->city = request('city');
      $purchase->state = request('state');
      $purchase->zip = request('zip');
      $purchase->card = request('card');

      if (request('card') == '5105 1051 0510 5100') {
        $purchase->save(); // Save to the database
        return redirect('/thanks/'.$item->id);
      } elseif (request('card') == '4111 1111 1111 1111') {
        $purchase->error = "Your card has declined";
        return back();
      }

      return back();
   }

  /**
   * Show the form for editing the specified resource.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function edit(Item $item)
  {
      //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, Item $item)
  {
      //
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
  public function destroy(Item $item)
  {
      //
  }
}
