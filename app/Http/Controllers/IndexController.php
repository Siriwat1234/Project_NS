<?php

namespace App\Http\Controllers;

use App\Product;
use App\Content1s;
use App\Content2s;
use App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class IndexController extends Controller
{
    public function index(){
        $recommend = Product::all();
        $content = Content1s::all();
        $content2 = Content2s::all();
        return view('welcome',compact('recommend','content','content2'));
    }
   
}