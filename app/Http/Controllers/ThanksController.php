<?php

namespace App\Http\Controllers;

use App\Item;
use Illuminate\Http\Request;

class ThanksController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

  /**
   * Display the specified resource.
   *
   * @param  \App\Item  $item
   * @return \Illuminate\Http\Response
   */
   public function show(Item $item)
   {
       return view('thanks', compact('item'));
   }
}
