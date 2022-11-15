<?php
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Models\Category;
use App\Models\Brand;

    function uploadImage($file, $path){
        $name = time().'-'.str_replace(' ', '-', $file->getClientOriginalName());
        $file->move($path,$name);
        return $path.'/'.$name;
    }
    function categories()
    {
    	$categories = Category::all();
    	return $categories;
    }
    function brands()
    {
    	$brands = Brand::all();
    	return $brands;
    }
    function pro()
    {
        $session = Session::get('cart') ?: [];
        return $session;
    }
?>
