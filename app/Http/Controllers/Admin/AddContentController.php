<?php

namespace App\Http\Controllers\Admin;

use App\Content1s;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddContentController extends Controller
{
    public function index(){
        return view('Admin.content.addcontent');
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:content1s|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $content = new Content1s;
        $content->name = $request->name;
        $content->description = $request->description;
        $content->price = $request->price;
        $content->id_categorys = $request->category;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $content->image = $filename;
        }else{
            $content->image = 'nopic.png';
        }
        $content->save();
        return redirect('/admin/content/index');
    }
}