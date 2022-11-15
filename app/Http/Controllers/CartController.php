<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use session;

class CartController extends Controller
{
    public function addToCart($id)
    {
    	
        $product = Product::findOrFail($id);
        // dd($product);
        $cart = session()->get('cart', []);
  
        if(isset($cart[$id])) 
        {
            return redirect()->back()->with('error','Product already added to cart');
        } else {
            $cart[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }
    public function removeToCart($id)
    {
    	if($id) {
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product deleted from cart successfully!');
        }
        return redirect()->back();

    }
}
