<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddRecommendController extends Controller
{
    public function index(){
        return view('Admin.recommend.addrecommend');
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $recommend = new Product;
        $recommend->name = $request->name;
        $recommend->description = $request->description;
        $recommend->price = $request->price;
        $recommend->id_categorys = $request->category;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $recommend->image = $filename;
        }else{
            $recommend->image = 'nopic.png';
        }
        $recommend->save();
        return redirect('/admin/recommend/index');
    }
}