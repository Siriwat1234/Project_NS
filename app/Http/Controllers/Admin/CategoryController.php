<?php

namespace App\Http\Controllers\Admin;

use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $category = Category::all();
        return view('Admin.category.index',compact('category'));
    }
    public function create(Request $request){
        //dd($request);
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.unique' => 'มีชื่อประเภทสินค้านี้อยู่ในฐานข้อมูลแล้ว',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/category/index');
    }

    public function edit($id_categorys){
        $category = Category::find($id_categorys);
        //dd($category);
        return view('Admin.category.editcategory',compact('category'));
    }
    public function update(Request $request,$id_categorys){
        $validated = $request->validate([
            'name' => 'required|max:255',
        ],
        [
            'name.required' => 'กรุณาเพิ่มข้อมูลประเภทสินค้าก่อน',
            'name.max' => 'กรอกข้อมูลได้สูงสุด 255 ตัวอักษร'
        ]);
        $category = Category::find($id_categorys);
        $category->name = $request->name;
        $category->save();
        return redirect('/admin/category/index');
    }
    public function delete($id_categorys){
        Category::destroy($id_categorys);
        return redirect('/admin/category/index');
    }
}