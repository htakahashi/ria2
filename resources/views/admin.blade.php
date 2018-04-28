@extends('layouts.app')

@section('content')
<div class="text-xs-center">
  <h1 class="display-3">Manage Orders</h1>
</div>
<h2 class="text-center">Recent Orders</h2>
<br />
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Customer Name</th>
      <th scope="col">Address</th>
      <th scope="col">Product Name</th>
    </tr>
  </thead>
  <tbody>
    @foreach($orders as $order)
    <tr>
      <td>{{ $order->first }}&nbsp;{{ $order->last }}</td>
      <td>{{ $order->address }}&nbsp; {{ $order->city }},{{ $order->state }}&nbsp;{{ $order->zip }}</td>
      <td>{{ $order->product }}</td>
    </tr>
    @endforeach
  </tbody>
</table>





@endsection