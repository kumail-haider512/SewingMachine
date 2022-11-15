<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;


class ProductController extends Controller
{
    public function list()
    {
        $list = Product::all();
    	return view('admin.product.list', get_defined_vars());
    }
    public function add()
    {
    	$cats = Category::all();
    	$brand = Brand::all();
    	return view('admin.product.add' , get_defined_vars());
    }
    public function save(Request $req, $id=null )
    {
    	// dd($req->all());
    	$req->validate([
    		'name' => 'required',
    		'image' => 'required',
    		'code' => 'required',
    		'availability' => 'required',
            'price' => 'required',
    		'description' => 'required',
            'category_id' =>'required',
            // 'brand_id' =>'required',

    	]);

    	if(is_null($id))
    	{
    		$product = new Product();
    		$product->name = $req->name;
    		$product->code = $req->code;
    		$product->availability = $req->availability;
    		$product->price = $req->price;
    		$product->category_id = $req->category_id;
    		$product->brand_id = $req->brand_id;
    		$product->description = $req->description;
    		$product->image = uploadImage($req->image,'uploads/product');
    		$product->save();
    		$msg = 'Product added successfully';
    	}
    	else
    	{
    		$product = Product::findorfail($id);
    		$product->name = $req->name;
    		$product->code = $req->code;
    		$product->availability = $req->availability;
    		$product->price = $req->price;
    		$product->description = $req->description;
    		$product->image = uploadImage($req->image,'uploads/product');
    		$product->save();
    		$msg = 'Product updated successfully';
    	}
    	return redirect()->route('admin.product.list')->with('success',$msg);

    }
    public function edit($id)
    {
        $product = Product::findorfail($id);
        return view('admin.product.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Product::findorfail($id)->delete();
        return redirect()->back()->with('success','product deleted successfully');
    }
}
