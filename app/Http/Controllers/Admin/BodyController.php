<?php

namespace App\Http\Controllers\Admin;

use App\body;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BodyController extends Controller
{
    public function index(){
        
        return view('admin.body.index');
    }

    public function add(){
        return view('admin.body.add_body');
    }

    public function edit(){
        return view('admin.body.edit_body');
    }
}
