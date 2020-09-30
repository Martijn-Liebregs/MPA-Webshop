@extends('layouts.app')

@section('content')
{{Session::get('shoppingCartList')[0]}}
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<div class="row">
		        	@foreach($data as $product)
		            	<div class="card col-md-4">
		            		<img src="{{asset('storage/images/'.$product->image_URL)}}">
		            		<h4>{{$product->name}}</h4>
		            		<p>€{{$product->price}}</p>
		            		<a href="{{url('cart/'.$product->id)}}">Toevoegen aan winkwagen</a>
		            	</div>
		            @endforeach
	            </div>
	        </div>
	    </div>
	</div>
@endsection
