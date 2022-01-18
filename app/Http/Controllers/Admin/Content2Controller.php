<?php

namespace App\Http\Controllers\Admin;

use App\Content2s;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class Content2Controller extends Controller
{
    public function index(){
        $content2 = Content2s::all();
        return view('Admin.content2.index',compact('content2'));
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:content2s|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.unique' => 'มีสินค้านี้อยู่ในฐานข้อมูลแล้ว',
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

    public function edit($id_content2s){
        $content2 = Content2s::find($id_content2s);
        //dd($content2);
        return view('Admin.content2.editcontent2',compact('content2'));
    }
    public function update(Request $request,$id_content2s){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $content2 = Content2s::find($id_content2s);
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
    public function delete($id_content2s){
        Content2s::destroy($id_content2s);
        return redirect('/admin/content2/index');
    }
}