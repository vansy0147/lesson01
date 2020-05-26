<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    public $timestamps = true;
    protected $fillable = ['id', 'desc', 'price', 'product_brand_id'];
}
