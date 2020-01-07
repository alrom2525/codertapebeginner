<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Customer;
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

class CustomerController extends Controller
{
    public function index(Request $request) {
    	
    	$customers = Customer::where('active', $request->query('active',1)  )->get(); // Obtaing only the active records
    	// $customers = Customer::all();
    	// $customers = \App\Customer::all();
    	return view('customer.index', compact('customers'));
    }

    public function create() {
    	$customer = new Customer();
    	return view('customer.create', compact('customer'));
    }

    public function store() {
    	$customer = Customer::create($this->validatedData());
    	Mail::to($customer->email)->send(new WelcomeMail());
    	// \App\Customer::create($this->validatedData());
    	return redirect('/customers/' . $customer->id);
    }

    // Method 1: To avoid errors if the record doesn't exist 
    // laravel going to show 404 | Not found
    public function show(Customer $customer) {
    	return view('customer.show', compact('customer'));
    }

    // Method 2: To avoid errors if the record doesn't exist
    // public function show($customerid) {
    // 	$customer = \App\Customer::findOrFail($customerid);
    // 	return view('customer.show', compact('customer'));
    // }

    public function edit(Customer $customer) {
    	return view('customer.edit ', compact('customer'));
    }

    public function update(Customer $customer) {
    	$customer->update($this->validatedData());
    	return redirect('/customers');
    }

	public function destroy(Customer $customer) {
    	$customer->delete();
    	return redirect('customers');
    }

    protected function validatedData() {
    	return request()->validate([
    		'name' => 'required',
    		'email' => 'required|email'
    	]);
    } 
}
