@extends ('layouts.master')


@section ('content')

<div class="container">
	
	<h1 class="page-title">Admin</h1>

	<hr>

	<h2>View Orders by Product</h2>


	<div class="btn-group" role="group" aria-label="Basic example">
		@for ($i = 1; $i <= $numOfProducts; $i++)
		  <a href="/admin/{{$i}}" class="btn"><img src="/assets/images/shoe{{$i}}thumb.jpg" alt="Shoes"></a>
		@endfor
	</div>

	<br><br>

	<div class="list-group">
	@isset($users)
	   
		@foreach ($users as $user)
			  <div class="list-group-item flex-column align-items-start">
			  <div class="row">
			  	<figure class="admin-order-img col-sm-2">
			  		<img src="/assets/images/{{ $product->thumbnail }}">
			  	</figure>
			  	<div class="col-sm-10">
				    <div class="d-flex w-100 justify-content-between">
				      <h5 class="mb-1">Product: <strong>{{ $product->title }}</strong>, Ordered by <strong>{{ $user->firstname }} {{ $user->lastname }}</strong></h5>
				    </div>
					<p class="mb-1">
						Billing Information:
						<br>{{ $user->address }}
						<br>{{ $user->city }}, {{ $user->state }} {{ $user->zip }}
					</p>
				    <small>Total: ${{ $product->price }}</small>
				</div>{{-- end of col --}}
				</div>{{-- end of row --}}
				<span class="badge badge-primary badge-pill">Pending</span>
			  </div>{{-- end of list group item --}}
		@endforeach

	@endisset

	 
	</div>{{-- end of list group --}}
</div>{{-- end of container --}}

@endsection