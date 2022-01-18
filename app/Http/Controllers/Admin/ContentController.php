<?php

namespace App\Http\Controllers\Admin;

use App\Content1s;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class ContentController extends Controller
{
    public function index(){
        $content = Content1s::all();
        return view('Admin.content.index',compact('content'));
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:content1s|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.unique' => 'มีสินค้านี้อยู่ในฐานข้อมูลแล้ว',
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

    public function edit($id_content1s){
        $content = Content1s::find($id_content1s);
        //dd($content);
        return view('Admin.content.editcontent',compact('content'));
    }
    public function update(Request $request,$id_content1s){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลสินค้าก่อน',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $content = Content1s::find($id_content1s);
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
    public function delete($id_content1s){
        Content1s::destroy($id_content1s);
        return redirect('/admin/content/index');
    }
}