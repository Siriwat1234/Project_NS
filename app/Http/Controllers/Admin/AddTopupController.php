<?php

namespace App\Http\Controllers\Admin;

use App\Topup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddTopupController extends Controller
{
    public function index(){
        return view('Admin.topup.addtopup');
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:topups|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $topup = new Topup;
        $topup->name = $request->name;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/img/',$filename);
            Image::make(public_path().'/admin/img/'.$filename);
            $topup->image = $filename;
        }else{
            $topup->image = 'nopic.png';
        }
        $topup->save();
        return redirect('/admin/topup/index');
    }
}