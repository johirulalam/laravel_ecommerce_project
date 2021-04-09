<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    //
   public function showhomepage()
    {

   	// $data = [];
    // $data['products'] = Product::select('id', 'slug', 'title', 'description', 'price', 'offer_price')->where('product_active', 1)->get(10);

    $data['products'] = Product::join('categories', 'products.category_id', '=', 'categories.id')
             ->select('products.*', 'categories.category_name')->get();
    return view('frontend.layouts.homepage', $data);
   } 


   public function product_details($slug)
   {
   	$data = [];
     $data['product_details'] = Product::where('product_slug', $slug)->where('product_active', 1)->first();

     if ( $data['product_details']== null) {
     	return view('frontend.layouts.abort');
     }

    return view('frontend.layouts.product_details', $data);

   }


   public function category_products($category_slug)
   {
   	$data = [];
   	$data['category_products'] = Product::join('categories', 'products.category_id', '=', 'categories.id')->select('products.*', 'categories.category_name')->where('categories.category_slug', $category_slug)->get();
   	return view('frontend.layouts.Category_products', $data);
   }

}
