<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable = [
        'product_name', 'product_id', 'cat_id', 'product_code','product_image','product_garege','details','product_route','bye_date','expier_date','buying_price','selling_price'
    ];
}
