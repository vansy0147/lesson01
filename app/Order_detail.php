<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_detail extends Model
{
    protected $table = 'order_details';
    public $timestamps = true;
    protected $fillable = ['id', 'name', 'price', 'quannity', 'total', 'orders_id', 'product_id'];
}
