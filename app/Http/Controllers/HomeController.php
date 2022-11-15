<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Checkout;
use Session;
class HomeController extends Controller
{
    public function index()
    {
        $item = Brand::all();
        $proc = Product::take(6)->get();
    	return view('front.home' , get_defined_vars());
    }
    public function about()
    {
        return view('front.about');
    }
    public function detail($id)
    {
        $item = Product::find($id);
        return view('front.detail',get_defined_vars());
    }
    public function contact()
    {
        return view('front.contact');
    }
    public function service()
    {
        return view('front.service');
    }
    public function delivery()
    {
        return view('front.deliveryinfo');
    }
    public function policy()
    {
        return view('front.policy');
    }
    public function return()
    {
        return view('front.return');
    }
    public function login()
    {
        return view('front.login');
    }
    public function wishlist()
    {
        return view('front.wishlist');
    }
    public function cart()
    {
        // $item = Product::find($id);
        return view('front.cart');
    }
    public function checkout()
    {
        return view('front.checkout');
    }
    public function register()
    {
        return view('front.register');
    }
    public function product($id,$name)
    {
        // dd($id,$name);
        if($name == "brand")
        {
            $item = Brand::find($id);
            $list = Product::where('brand_id',$id)->get();
        }
        else
        {
            $item = Category::find($id);
            $list = Product::where('category_id',$id)->get();
        }
        $product_name= $item->name;
        return view('front.product' , get_defined_vars());
    }
    public function saveCheckout(Request $req)
    {
        
        $stripe = new \Stripe\StripeClient(env('STRIPE_SECRET'));
        $intent=Session::get('intent_id');
        $response = $stripe->paymentIntents->capture($intent,['amount' => $req->amount*100]);
        $str=str_replace('[','',$req->product_id);
        $id=str_replace(']','',$str);
        $ids = explode(',', $id);
        // dd($req->all(),$ids);
        foreach ($ids as $id) {
            $product = Product::find($id);
            $checkout = new Checkout();
            $checkout->product_id = $product->id;
            $checkout->name = $req->name;
            $checkout->email = $req->email;
            $checkout->number = $req->number;
            $checkout->address = $req->address;
            $checkout->save();
            $cart = session()->get('cart');
            if(isset($cart[$id])) {
                unset($cart[$id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Order created successfully!');
        }
        
        return redirect()->route('home');
    }
    
}
