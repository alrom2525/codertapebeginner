@extends('layout')
@section('title','Services')

@section('content')
<div class="container">
	<h1>Services view</h1>


<form action="/services" method="post">
	<input type="text" name="name" autocomplete="off">
	
	@csrf 

	<button>Add service</button>
</form>
@error('name')
<br><br>
	<div class="alert alert-danger">
  		<strong>{{ $message }} </strong>
	</div>
@enderror

<p>To add a new service, please write it and press the previous button.</p>

<h2>Info customer.service@example2.com</h2>

<ul>
	
	@forelse ($services as $service)
		<li>{{$service->name}}</li>
	@empty
		<li>No services available.</li>
	@endforelse
</ul>
</div> 
@endsection