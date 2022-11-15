<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;


class CategoryController extends Controller
{
    public function list()
    {
        $list = Category::all();
    	return view('admin.category.list', get_defined_vars());
    }
    public function add()
    {
    	return view('admin.category.add');
    }
    public function save(Request $req, $id=null )
    {
    	// dd($req);
    	$req->validate([
    		'name' => 'required',
    	]);

    	if(is_null($id))
    	{
    		$category = new Category();
    		$category->name = $req->name;
    		$category->save();
    		$msg = 'category added successfully';
    	}
    	else
    	{
    		$category = Category::findorfail($id);
            $category->name = $req->name;
            $category->save();
    		$msg = 'category updated successfully';
    	}
    	return redirect()->back()->with('success',$msg);

    }
    public function edit($id)
    {
        $category = Category::findorfail($id);
        return view('admin.category.edit',get_defined_vars());
    }
    public function delete($id)
    {
        Category::findorfail($id)->delete();
        return redirect()->back()->with('success','category deleted successfully');
    }
}
