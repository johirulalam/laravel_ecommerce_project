<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    //

    public function addToCart( Request $request)
    {
    	
    	try{
    		$this->validate($request, [
    			'product_id' => 'required|numeric',
    		]);
    	} catch(ValidationException $e) {
    		return redirect()->back();
    	}

    	$product = Product::findOrFail($request->input('product_id'));

    	$unit_price = empty($product->product_offer_price) ? $product->product_price : $product->product_offer_price;

    	$cart = session()->has('cart') ? session()->get('cart') : [];



    		if (array_key_exists($product->id, $cart)) {

    			$cart[$product->id]['quantity']++;

    			$cart[$product->id]['total_price'] = $cart[$product->id]['quantity'] * $cart[$product->id]['price'];

    		} else {

    			$cart[$product->id] = [

    				//'id'  => $product->id,

    				'title'=> $product->product_title,

    		        'quantity' => 1,

    		        'price' => $unit_price,

    		        'total_price' => $unit_price,
    			];

    		}

    	session(['cart' => $cart]);



    	 session()->flash('message', $product->product_title.' added to cart');

    	return redirect()->route('cart.show');
    }




    public function showCart()
    {
     //session()->flush();
    	$data = [];
    	$data['cart'] = session()->has('cart') ? session()->get('cart') : [];
    	$data['total'] = array_sum(array_column($data['cart'], 'total_price'));

    	return view('frontend.layouts.cart', $data);
    }







    public function removeFromCart(Request $request) 
    {

    	try{
    		$this->validate($request, [
    			'product_id' => 'required|numeric',
    		]);
    	} catch(ValidationException $e) {
    		return redirect()->back();
    	}

    	$cart = session()->has('cart') ? session()->get('cart') : [];

    	unset($cart[$request->input('product_id')]);

    	session(['cart' => $cart]);

    	return redirect()->back();
    }



    public function clearCart()
    {
    	$cart = [];

    	session(['cart' => $cart]);

    	return redirect()->back();
    }


}
