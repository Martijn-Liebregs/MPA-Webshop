@extends('layouts.app')

@section('content')

<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<div class="row">
		        	@foreach($cartContent as $key => $product)
		            	<div class="card col-md-4">
		            		<img src="{{asset('storage/images/'.$product->image_URL)}}">
		            		<h4>{{$product->name}}</h4>
		            		<p>€{{$product->price}}</p>
		            		<a href="{{url('cart/delete/'.$key)}}">Verwijderen uit winkwagen</a> <!-- URL nog niet goed -->
		            	</div>
		            @endforeach
	            </div>
	        </div>
	    </div>
</div>

@endsection