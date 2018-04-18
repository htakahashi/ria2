@extends('products.template')
@section('content')
@hasrole('admin')



@foreach($items as $item)
<div class="row">
        <div class="col-sm-12">
                <h2>Orders:</h2>
        </div>
    <table class="table">
        <thead>
            <tr>
                <th scope-"col">Name</th>
                <th scope-"col">Email</th>
                <th scope-"col">Address</th>
                <th scope-"col">Address2</th>
                <th scope-"col">City</th>
                <th scope-"col">Fulfilled</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td>{{$item->address}}</td>
                <td>{{$item->address2}}</td>
                <td>{{$item->city}}, {{$item->state}}  {{$item->zip}}</td>
                <td></td>
              
            </tr>
        </tbody>
    </table>

	</div>
@endforeach

@else
<?php header('location: /welcome'); ?>
@endhasrole
@endsection