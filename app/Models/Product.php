<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public $guarded = [];

// to generate product slug 
    protected static function boot()
    {
    	parent:: boot();
    	static::creating(function ($product){
    		$product->slug = str_slug($product->title);
    	});
    }

    public function category()
    {
    	return $this->HasOne(Category::class);
    }

}
