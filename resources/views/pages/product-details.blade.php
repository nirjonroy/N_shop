@extends('layout')
@section('content')

 
  			<div style="margin: 5%; background: skyblue; width: 100%; height: 500px">
  				<img src={{URL::to("$product_by_details->product_image")}} width="400px" height="500px">
  				<div style="margin-left: 40%; margin-bottom: 400px">
  				<h1> Name : {{$product_by_details->product_name}}</h1>
  				<h2>Price: {{$product_by_details->product_price}} </h2>
  				<h3>Size: {{$product_by_details->product_size}}</h3>
  				<h4>Colour: {{$product_by_details->product_colour}} </h4>
  				<h5>Short Detail: {{$product_by_details->product_short_description}} </h5>
  				<p>Full Detail: {{$product_by_details->product_long_description}}</p>
  				</div>
  			</div>
     	product_size
    
@endsection