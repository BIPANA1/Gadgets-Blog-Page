@extends('layout.main')
@section('content')


<form class="form-edit" action="/edit-blog/{{$blog->id}}" method="post" enctype="multipart/form-data" >
@csrf
    <div>
        <h2>Update Product</h2>
        <br>
    <label>Product name</label>
    <input type="text" name="productname" value="{{$blog->productname}}">
    </div>
    <div>
    <label>Model</label>
    <input type="text" name="model" value="{{$blog->model}}">
    </div>
    <div>
    <label>Price</label>
    <input type="text" name="price" value="{{$blog->price}}">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        
        <input type="submit" name="post" value="Add Item">
    </div>
</form>
@endsection