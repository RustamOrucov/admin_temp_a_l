<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.pages.user.index');
    }
    public function create()
    {
        return view('admin.pages.user.form');
    }
    public function store(Request $request){
        dd($request->all());
    }
}
