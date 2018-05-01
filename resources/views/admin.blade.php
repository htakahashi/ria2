@extends ('layout')

@section('content')

<h2>Orders</h2>
<div class="table-responsive">
<table class="table table-striped table-sm">
<thead>
<tr>
<th>#</th>
<th>Name</th>
<th>Address</th>
<th>Item</th>
<th>Date</th>
</tr>
</thead>
<tbody>

@foreach ($orders as $order)

<tr>
<td> {{$order->id}} </td>
<td> {{$order->first}} {{$order->last}} </td>
<td> {{$order->address}} {{$order->city}} {{$order->state}} {{$order->zip}}</td>
<td>
@if ($order->item == 1)
   {{ "Rock Buddies" }}
   @elseif ($order->item == 2)
   {{ "Best Friend Rocks" }}
   @else
      {{ "Custom Rocks" }}
@endif

</td>
<td>{{$order->created_at}}</td>
</tr>

@endforeach

</tbody>
</table>
</div>


@endsection