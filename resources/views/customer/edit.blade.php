<h3>Edit customer details</h3>

<form action="/customers/{{ $customer->id }}" method="post">
	@method('PATCH')

	@include('customer.form')
	
	<br> 
	<button>Save customer</button>
</form>