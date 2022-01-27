<?php

namespace App\Http\Controllers\Admin;

use App\Hairstyle;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class HairstyleController extends Controller
{
    public function index(){
        $hairstyle = Hairstyle::all();
        return view('admin.hairstyle.index',compact('hairstyle'));
    }

    public function add(){
        return view('admin.hairstyle.add_hairstyle');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกชื่อทรงผม',
            'text.required' => 'กรุณกรอกรายละเอียด',
            'price.required' => 'กรุณกรอกราคา',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลข',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        $create_hairstyle = new Hairstyle;
        $create_hairstyle->name = $request->name;
        $create_hairstyle->text = $request->text;
        $create_hairstyle->price = $request->price;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $create_hairstyle->image = $filename;
        }
        else{
            $create_hairstyle->image = 'NOPIC.png';
        }

        $create_hairstyle->save();
        return redirect()->route('hairstyle');
    }

    public function edit($id){
        $hairstyle_edit = Hairstyle::find($id);
        return view('admin.hairstyle.edit_hairstyle',compact('hairstyle_edit'));
    }

    public function update(Request $request, $hairstyle_id ){

        $validatedData = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'price' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกชื่อทรงผม',
            'text.required' => 'กรุณกรอกรายละเอียด',
            'price.required' => 'กรุณกรอกราคา',
            'price.numeric' => 'ป้อนได้เฉพาะตัวเลข',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        if($request->hasFile('image')){
            $update_hairstyle = Hairstyle::find($hairstyle_id );
            if ($update_hairstyle->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$update_hairstyle->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $update_hairstyle->image = $filename;

            $update_hairstyle->name = $request->name;
            $update_hairstyle->text = $request->text;
            $update_hairstyle->price = $request->price;
        }
        else{
            $update_hairstyle = Hairstyle::find($hairstyle_id );

            $update_hairstyle->name = $request->name;
            $update_hairstyle->text = $request->text;
            $update_hairstyle->price = $request->price;
        }

        $update_hairstyle->save();
        return redirect()->route('hairstyle');
    }

        //delete
    public function delete($hairstyle_id){
        $delete = Hairstyle::find($hairstyle_id);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/admin/Hairstyle/index');
    }

}
