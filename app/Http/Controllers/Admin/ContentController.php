<?php

namespace App\Http\Controllers\Admin;

use App\Content;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContentController extends Controller
{
    public function index(){
        $content = Content::all();
        return view('admin.body.index',compact('content'));
    }

    public function add(){
        return view('admin.body.add_body');
    }

    public function create(Request $request){

        $validatedData = $request->validate([
            'text' => 'required',
        ],
        [
            'text.required' => 'กรุณกรอกรายละเอียด',
        ]
        );

        $create_content = new Content;
        $create_content->text = $request->text;

        $create_content->id_admin = Auth::user()->id;
        $create_content->save();
        return redirect()->route('content');
    }

    public function edit($id){
        $edit_content = Content::find($id);
        return view('admin.body.edit_body',compact('edit_content'));
    }

    public function update(Request $request, $id_contents){

        $validatedData = $request->validate([
            'text' => 'required',
        ],
        [
            'text.required' => 'กรุณกรอกรายละเอียด',
        ]
        );

        $update_content = Content::find($id_contents);
        $update_content->text = $request->text;

        $update_content->save();
        return redirect()->route('content');
    }

    //delete
    public function delete($id_contents){
        $delete = Content::find($id_contents);
        $delete->delete();
        return redirect('/admin/content/index');
    }
}
