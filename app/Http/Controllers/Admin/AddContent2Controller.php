<?php

namespace App\Http\Controllers\Admin;

use App\Content2s;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddContent2Controller extends Controller
{
    public function index(){
        return view('Admin.content2.addcontent2');
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:content2s|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $content2 = new Content2s;
        $content2->name = $request->name;
        $content2->description = $request->description;
        $content2->price = $request->price;
        $content2->id_categorys = $request->category;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $content2->image = $filename;
        }else{
            $content2->image = 'nopic.png';
        }
        $content2->save();
        return redirect('/admin/content2/index');
    }
}