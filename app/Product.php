<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['brand', 'model_number', 'description', 'price', 'special_price', 'quantity', 'availability'];
}

