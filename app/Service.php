<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    // To allow mass assignment on [App\Service]
    // First method: we need to declare which column will be fillable
    // a) protected $fillable = ['name'];
	// b) protected $fillable = ['name', 'date', 'another_field'];
    
    // Second method: guarded by default saves every single field
    protected $guarded = [];

}
