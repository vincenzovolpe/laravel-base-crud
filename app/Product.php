<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'price_regular', 'price_discount', 'image_front', 'image_lateral', 'vote', 'state'];
}
