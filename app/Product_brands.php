<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_brands extends Model
{
    protected $table = 'product_brands';
    public $timestamps = false;
    protected $fillable = ['id', 'name'];
}
