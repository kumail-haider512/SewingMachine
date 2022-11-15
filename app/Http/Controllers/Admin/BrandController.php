<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;


class BrandController extends Controller
{
    public function list()
    {
        $list = Brand::all();
    	return view('admin.brand.list', get_defined_vars());
    }
    public function add()
    {
    	return view('admin.brand.add');
    }
    public function save(Request $req, $id=null )
    {
    	// dd($req);
    	$req->validate([
    		'name' => 'required',
    		'image' => 'required'
    	]);

    	if(is_null($id))
    	{
    		$brand = new Brand();
    		$brand->name = $req->name;
    		$brand->image = uploadImage($req->image,'uploads/brand');
    		$brand->save();
    		$msg = 'Brand added successfully';
    	}
    	else
    	{
    		$brand = brand::findorfail($id);
            $brand->name = $req->name;
            $brand->image = uploadImage($req->image,'uploads/brand');
            $brand->save();
    		$msg = 'Brand updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function edit($id)
    {
        $brand = Brand::findorfail($id);
        return view('admin.brand.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Brand::findorfail($id)->delete();
        return redirect()->back()->with('success','Brand deleted successfully');
    }
}
