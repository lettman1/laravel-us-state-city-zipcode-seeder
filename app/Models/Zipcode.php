<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Zipcode extends Model
{
    use HasFactory;

    protected $table = "zipcodes";
  
    protected $fillable = [
        'country', 'zipcode', 'city', 'state', 'state_abbr', 'county', 'latitude', 'longitude'
    ];
}
