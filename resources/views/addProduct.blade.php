
@extends('layout.main')
@section('content')
@if(session('message'))
<!-- <div class="alert">
    {{session('message')}}
</div> -->
<script>
    window.addEventListener('DOMContentLoaded', (event) => {
        alert("{{ session('message') }}");
    });
</script>
@endif
<table class="form-register">
    <tr>
    <th>Product name</th>
    <th>Model</th>
    <th>Price</th>
    <th>Image</th>
    <th>Action</th>
    </tr>
    @foreach($blogs as $blog)
    <tr>
    <td>{{$blog->productname}}</td>
    <td>{{$blog->model}}</td>
    <td>{{$blog->price}}</td>
    <td>
        <img src="{{asset($blog->image)}}" alt="Image" width="50" height="40" >
    </td>
    
    <td>
    <div class="btn-0">
        <button class="btn-1"><a href="/edit/{{$blog->id}}"> Edit </a></button>
        <button class="btn-2"><a href="/delete-post/{{$blog->id}}">Delete</button>
        </div>
    </td>
    </tr>
    @endforeach
</table>
<button class="add-btn"><a href="/addItem"> Add new product </a> </button>

@endsection