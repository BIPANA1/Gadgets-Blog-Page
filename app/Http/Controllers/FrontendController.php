<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class FrontendController extends Controller
{
    public function welcome()
    {
        $blogs = Blog::all();
        return view('welcome', compact('blogs'));
    }

    // public function description($id){
    //     $blog = Blog::find($id);
    //     return view('description',compact('blog'));
    // }

    public function description($id)
    {

        $blog = Blog::find($id);
        return view('description', compact('blog'));
    }
}
