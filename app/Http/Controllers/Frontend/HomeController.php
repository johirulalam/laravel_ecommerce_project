<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\MOdels\Product;

class HomeController extends Controller
{
    //
   public function showhomepage()
    {

   	// $data = [];
    // $data['products'] = Product::select('id', 'slug', 'title', 'description', 'price', 'offer_price')->where('product_active', 1)->get(10);

    $data['products'] = Product::join('categories', 'products.category_id', '=', 'categories.id')
             ->select('products.*', 'categories.name')->get();
    return view('frontend.layouts.homepage', $data);
   } 


   public function product_details($slug)
   {
   	$data = [];
     $data['product_details'] = Product::where('slug', $slug)->where('product_active', 1)->first();

    return view('frontend.layouts.product_details', $data);

   }

}
