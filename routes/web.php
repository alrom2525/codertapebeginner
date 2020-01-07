<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Mail\WelcomeMail;
use Illuminate\Support\Facades\Mail;

Route::get('/email', function () {
	Mail::to('email@email.com')->send(new WelcomeMail());
    return new WelcomeMail();
});

Route::get('/hello', 'HelloController@index');
Route::get('/about', 'HelloController@about');
Route::get('/services', 'ServiceController@index');
Route::post('/services', 'ServiceController@store');
Route::get('/customers', 'CustomerController@index');
Route::get('/customers/create', 'CustomerController@create');
Route::post('/customers', 'CustomerController@store');
Route::get('/customers/{customer}', 'CustomerController@show');
Route::get('/customers/{customer}/edit', 'CustomerController@edit');
Route::patch('/customers/{customer}', 'CustomerController@update');
Route::delete('/customers/{customer}', 'CustomerController@destroy');

/* 
Route::get('/hello', function() {
	// return 'Hello ';
    $parameter = 'Hello from routes II...';
    $variable =  'Hello from routes';
	//return view('hello', data:['someData' => $variable]);
    // https://laravel.com/docs/6.x/views#passing-data-to-views
    // return view('hello', ['name' => 'James']);
   	return view('hello', ['parameters' => $parameter]); 
	// return view('hello');
});
*/