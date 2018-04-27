@extends ('layouts.master')

@section('contentTitle', 'Orders')

@section('wrapper')

 <div class="grid-container">  
	<div class="grid-item">
		<table>
	 	@foreach($orders as $order)
	 	
			@include('partials.singleOrder')

		@endforeach
		</table>
	</div>
</div> 

@endsection

