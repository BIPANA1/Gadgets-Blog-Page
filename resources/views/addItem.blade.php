@extends('layout.main')
@section('content')

@if(session('message'))
<div class="alert">
    {{session('message')}}
</div>
@endif


<form class="form-items" action="/create-product" method="post" enctype="multipart/form-data" >
@csrf
    <div>
        <h2>Add New Product</h2>
    <label>Product name</label>
    <input type="text" name="productname">
    </div>
    <div>
    <label>Model</label>
    <input type="text" name="model">
    </div>
    <div>
    <label>Price</label>
    <input type="text" name="price">
    </div>
    <div>
        <input type="file" name="image">
    </div>
    <div>
        <input type="submit" name="post">
    </div>
</form>
@endsection