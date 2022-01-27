<?php

namespace App\Http\Controllers\Admin;

use App\Header;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Image;
use File;

class HeaderController extends Controller
{
    public function index(){
        $header = Header::all();
        return view('admin.header.index',compact('header'));
    }

    public function add(){
        return view('admin.header.add_header');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกข้อมูล',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
            // 'image.size' => 'อัพโหลดรูปภาพได้ไม่เกิน 10 MB',
        ]
        );

        $create_header = new Header;
        $create_header->text = $request->name;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $create_header->image = $filename;
        }
        else{
            $create_header->image = 'NOPIC.png';
        }
        
        $create_header->id_admin = Auth::user()->id;
        $create_header->save();
        return redirect()->route('header');
    }

    public function updateStatus(Request $request)
    {
        $headers = Header::findOrFail($request->id_header);
        $headers->status = $request->status;
        $headers->save();

        return response()->json(['success'=>'Status change successfully.']);
    }

    public function edit($id){
        $header_edit = Header::find($id);
        return view('admin.header.edit_header',compact('header_edit'));
    }

    public function update(Request $request, $id_header){

        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกข้อมูล',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        if($request->hasFile('image')){
            $update_header = Header::find($id_header);
            if ($update_header->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$update_header->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $update_header->image = $filename;

            $update_header->text = $request->name;
        }
        else{

            $update_header = Header::find($id_header);
            $update_header->text = $request->name;
        }

        $update_header->save();
        return redirect()->route('header');
    }

    //delete
    public function delete($id_header){
        $delete = Header::find($id_header);
        if ($delete->image != 'NOPIC.png') {
            File::delete(public_path().'/admin/images/'.$delete->image);
        }
        $delete->delete();
        return redirect('/admin/Header/index');
    }
}
