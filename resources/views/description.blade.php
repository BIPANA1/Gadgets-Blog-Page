@extends('layout.main')
@section('content')

<div><h1>{{$blog->productname}}</h1></div>

<div class="img-auth">
        <img src="{{asset($blog->image)}}" alt="Image" width="50">
        <div class="heading">
            <div>    
                <p>{{$blog->model}}</p>
                <p>{{$blog->price}}</p>
            </div>
        </div>
</div>
@endsection