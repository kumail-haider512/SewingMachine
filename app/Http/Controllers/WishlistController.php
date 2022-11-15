<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use session;

class WishlistController extends Controller
{
   public function addToWish($id)
    {
    	// dd($id);
        $product = Product::findOrFail($id);
        // dd($product);
        $wish = session()->get('wish', []);
  
        if(isset($wish[$id])) 
        {
            return redirect()->back()->with('error','Product already added to wish');
        } else {
            $wish[$id] = [
                "id" => $product->id,
                "name" => $product->name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }
          
        session()->put('wish', $wish);
        return redirect()->back()->with('success', 'Product added to wish successfully!');
    }
    public function removeToWish($id)
    {
    	if($id) {
            $wish = session()->get('wish');
            if(isset($wish[$id])) {
                unset($wish[$id]);
                session()->put('wish', $wish);
            }
            session()->flash('success', 'Product deleted from wish successfully!');
        }
        return redirect()->back();

    }
}