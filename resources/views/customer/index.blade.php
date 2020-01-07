<h3>We are inside of customers</h3>
<br><br>
<a href="/customers/create">Add new customer</a>
<a href="/customers?active=1">Active</a>
<a href="/customers?active=0">Inactive</a>
<br>
@forelse($customers as $customer)
		<p><strong>
			<a href="/customers/{{ $customer->id}}"> {{ $customer->name }} </a>
			
		</strong> ({{ $customer->email}})</p>
@empty
    	<p>No customers to show</p>	
@endforelse