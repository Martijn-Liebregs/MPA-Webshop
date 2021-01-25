@extends('layouts.app')

@section('content')
	<div class="container">
	    <div class="row justify-content-center">
	        <div class="col-md-8">
	        	<div class="row">
		        	@foreach($data as $product)
		            	<div class="card col-md-4">
		            		<h4>{{$product->name}}</h4>
		            		<p>€{{$product->price}}</p>
		            		@foreach($product->category as $category)
	            				<p>{{$category->name}}</p>
		            		@endforeach
		            		<a href="{{url('cart/'.$product->id)}}">Toevoegen aan winkwagen</a>
		            	</div>
		            @endforeach
	            </div>
	        </div>
	    </div>
	</div>
@endsection

