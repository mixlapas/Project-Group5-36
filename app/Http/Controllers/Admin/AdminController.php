<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Contact;
use App\Content;
use App\Hairstyle;
use App\Header;

class AdminController extends Controller
{
    public function index()
    {
        $header = Header::all();
        $hairstyle = Hairstyle::all();
        $contact = Contact::all();
        $content = Content::all();

        return view('admin.index',compact('header' , 'hairstyle' , 'contact' , 'content'));
    }
}
