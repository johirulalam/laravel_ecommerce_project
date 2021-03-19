<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $guarded = [];


    public function parent_category()
    {
    	return $this->belongsTo(__CLASS__); // for Category::class (because same class)

    }

    public function child_category()
    {
    	return $this->hasMany(__CLASS__);  //// for Category::class
    }

    public function products()
    {
    	return $this->hasMany(Product::class); 
    }
}
