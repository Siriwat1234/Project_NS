<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AddUserController extends Controller
{
    public function index(){
        return view('Admin.user.adduser');
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
        ],
        [
            'username.required' => 'กรุณาเพิ่ม Username ก่อน',
            'username.unique' => 'มี Username นี้อยู่ในฐานข้อมูลแล้ว',
            'username.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $user = new User;
        $user->username = $request->username;
        $user->save();
        return redirect('/admin/user/adduser');
    }
}