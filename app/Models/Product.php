<?php

namespace App\Models;


use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Product extends Model implements HasMedia
{
    use HasFactory;
    use InteractsWithMedia;

    public $guarded = [];

// to generate product slug 
    protected static function boot()
    {
    	parent:: boot();
    	static::creating(function ($product){
    		$product->product_slug = Str::slug($product->product_title);
    	});
    }

    public function category()
    {
    	return $this->HasOne(Category::class);
    }

}
