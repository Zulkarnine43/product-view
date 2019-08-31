<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    //
    protected $fillable =['category-id','brand-id','product-name','product-price','product-quantity','short-description','long-description','product-image','publication-status'];
}
