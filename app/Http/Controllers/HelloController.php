<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
	public function index(){
	    //$parameter = 'Hello from Controller!';
	    //$variable =  'Hello from Controller';
		//return view('hello',['someData' => $variable]);
	    // https://laravel.com/docs/6.x/views#passing-data-to-views
	    // return view('hello', ['name' => 'James']);
	   	//return view('hello', ['parameters' => $parameter]);
	   	return view('welcome');
    }

    public function about(){
    	return view('about');
    }

    /*
	public function services(){
		// $services = [
		// 	'Service 1',
		// 	'Service 2',
		// 	'Service 3',
		// 	'Service 4',
		// ]; 

		$services = \App\Service::all();
		// dd($services);

		return view('services', compact('services'));
	}  
	*/  
    
}
