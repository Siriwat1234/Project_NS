<?php

namespace App\Http\Controllers\Admin;

use App\Product;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class RecommendController extends Controller
{
    public function index(){
        $recommend = Product::all();
        return view('Admin.recommend.index',compact('recommend'));
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:products|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.unique' => 'มีสินค้านี้อยู่ในฐานข้อมูลแล้ว',
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

    public function edit($id_recommends){
        $recommend = Product::find($id_recommends);
        //dd($recommend);
        return view('Admin.recommend.editrecommend',compact('recommend'));
    }
    public function update(Request $request,$id_recommends){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $recommend = Product::find($id_recommends);
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
    public function delete($id_recommends){
        Product::destroy($id_recommends);
        return redirect('/admin/recommend/index');
    }
}