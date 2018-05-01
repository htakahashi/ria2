<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Order;
class OrderController extends Controller
{
   public function store(Request $request)
   {
   
      Order::create(request(['first', 'last', 'item', 'price', 'address', 'city', 'state', 'zip']));
      return redirect('/thanks')->with([
        'first' => $request->first,
        'last' => $request->last,
        'item' => $request->item,
        'price' => $request->price,
        'address' => $request->address,
        'city' => $request->city,
        'state' => $request->state,
        'zip' => $request->zip
      ]);
   }
}
