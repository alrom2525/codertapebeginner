<h3>Customer details</h3>

<div>
	<a href="/customers">Back</a>
</div>
<br><br>
<strong>Name</strong>
<p>{{ $customer->name}}</p>

<strong>Email</strong>
<p>{{ $customer->email}}</p>

<div>
	<a href="/customers/{{ $customer->id}}/edit">Edit</a>
</div>

<div>
	<form action="/customers/{{ $customer->id }}" method="post">
		@method('DELETE')
		@csrf
		<button>Delete</button>
	</form>
</div>