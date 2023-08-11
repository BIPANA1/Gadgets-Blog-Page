<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $blogs =Blog::all();
        return view('home',compact('blogs'));
    }

   
    public function addProduct()
    {
        if (auth()->user()->role == 1) {
            $blogs = Blog::all();
            return view('addProduct', compact('blogs'));
        } else {
            return redirect('/home');
        };

    }
    public function additem(){
        return view('addItem');
    }
}
