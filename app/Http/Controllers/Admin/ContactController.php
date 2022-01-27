<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use File;

class ContactController extends Controller
{
    public function index(){
        $contact = Contact::all();
        return view('admin.contact.index',compact('contact'));
    }

    public function add(){
        return view('admin.contact.add_contact');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกชื่อ',
            'text.required' => 'กรุณกรอกข้อมูล',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        $create_contact = new Contact;
        $create_contact->name = $request->name;
        $create_contact->text = $request->text;

        if($request->hasFile('image')){
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $create_contact->image = $filename;
        }
        else{
            $create_contact->image = 'NOPIC.png';
        }

        $create_contact->id_admin = Auth::user()->id;
        $create_contact->save();
        return redirect()->route('contact');
    }

    public function edit($id){
        $edit_contact = contact::find($id);
        return view('admin.contact.edit_contact',compact('edit_contact'));
    }

    public function update(Request $request, $id_contact ){

        $validatedData = $request->validate([
            'name' => 'required',
            'text' => 'required',
            'image' => 'mimes:jpeg,jpg,png,gif|file'
        ],
        [
            'name.required' => 'กรุณกรอกชื่อ',
            'text.required' => 'กรุณกรอกข้อมูล',
            'image.mimes' => 'อัพโหลดรูปภาพได้เฉพาะ jpeg,jpg,png,gif เท่านั้น',
            'image.file' => 'อัพโหลดได้เฉพาะไลฟ์รูปภาพ',
        ]
        );

        if($request->hasFile('image')){
            $update_contact = Contact::find($id_contact );
            if ($update_contact->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$update_contact->image);
            }
            $filename = Str::random(10).'.'.$request->file('image')->getClientOriginalExtension();
            $request->file('image')->move(public_path().'/admin/images/',$filename);
            // Image::make(public_path().'/admin/images/'.$filename);
            $update_contact->image = $filename;

            $update_contact->name = $request->name;
            $update_contact->text = $request->text;
        }
        else{

            $update_contact = Contact::find($id_contact );
            $update_contact->name = $request->name;
            $update_contact->text = $request->text;
        }

        $update_contact->save();
        return redirect()->route('contact');
    }

        //delete
        public function delete($id_contact){
            $delete = Contact::find($id_contact);
            if ($delete->image != 'NOPIC.png') {
                File::delete(public_path().'/admin/images/'.$delete->image);
            }
            $delete->delete();
            return redirect('/admin/Contact/index');
        }
}
