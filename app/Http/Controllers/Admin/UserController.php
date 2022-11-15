<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Hash;

class UserController extends Controller
{
    public function list()
    {
    	$list = User::where('role','!=','admin')->get();
    	return view('admin.user.list',get_defined_vars());
    }
}
