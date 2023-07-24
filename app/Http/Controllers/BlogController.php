<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

  public function index()
  {
    $blogs = Blog::all();
    return view('addProduct', compact('blogs'));
  }
  public function product()
  {
    $blogs = Blog::all();
    return view('product', compact('blogs'));
  }



  public function create(Request $request)
  {
    try {
      $blog = new Blog();
      $blog->productname = $request->productname;
      $blog->model = $request->model;
      $blog->price = $request->price;
      if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalName();
        $file->move(public_path('Image/'), $filename);
      }
      $blog->image = 'Image/' . $filename;
      $blog->save();
      return redirect('addProduct')->with('message','Sucessfully Created');
    } catch (\Throwable $th) {
      return back()->with('message','error while creating');
    }
   
  }

  public function delete($id)
  {
    $data = Blog::where('id', $id)->first();
    $data->delete();
    return redirect()->back();
  }

  public function edit($id)
  {
    $blog = Blog::find($id);
    return view('edit', compact('blog'));
  }
  public function editBlog($id, Request $request)
  {
    $blog = Blog::find($id);
    $blog->productname = $request->productname;
    $blog->model = $request->model;
    $blog->price = $request->price;
    if ($request->hasFile('image')) {
      $file = $request->file('image');
      $filename = time() . '.' . $file->getClientOriginalName();
      $file->move(public_path('Image/'), $filename);
      $blog->image = 'Image/' . $filename;
    }
    $blog->update();
    return redirect('addProduct');
  }
}
