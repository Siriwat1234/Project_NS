<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $user = User::all();
        return view('Admin.user.index',compact('user'));
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
        return redirect('/admin/user/index');
    }

    public function edit($id){
        $user = User::find($id);
        //dd($user);
        return view('Admin.user.edituser',compact('user'));
    }
    public function update(Request $request,$id){
        $validated = $request->validate([
            'username' => 'required|unique:users|max:255',
        ],
        [
            'username.required' => 'กรุณาเพิ่ม Username ก่อน',
            'username.unique' => 'มี Username นี้อยู่ในฐานข้อมูลแล้ว',
            'username.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $user = User::find($id);
        $user->username = $request->username;
        $user->save();
        return redirect('/admin/user/index');
    }
    public function delete($id){
        User::destroy($id);
        return redirect('/admin/user/index');
    }
}