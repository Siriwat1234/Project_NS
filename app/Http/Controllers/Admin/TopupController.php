<?php

namespace App\Http\Controllers\Admin;

use App\Topup;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Image;

class TopupController extends Controller
{
    public function index(){
        $topup = Topup::all();
        return view('Admin.topup.index',compact('topup'));
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:topups|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มช่องทางการเติมเงินก่อน',
            'name.unique' => 'มีช่องทางการเติมเงินนี้อยู่ในฐานข้อมูลแล้ว',
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

    public function edit($id_topups){
        $topup = Topup::find($id_topups);
        //dd($topup);
        return view('Admin.topup.edittopup',compact('topup'));
    }
    public function update(Request $request,$id_topups){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มช่องทางการเติมเงินก่อน',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $topup = Topup::find($id_topups);
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
    public function delete($id_topups){
        Topup::destroy($id_topups);
        return redirect('/admin/topup/index');
    }
}