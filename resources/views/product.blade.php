@extends('layout.main')
@section('content')



<div class="gallery">
  @foreach($blogs as $blog)
  <div class="card">
    <div class="container">
      <div class="img-auth">
        <img src="{{asset($blog->image)}}" alt="Image" width="50">
      </div>
      <div class="heading">
        <h1>{{$blog->productname}}</h1>
        <p>{{$blog->model}}</p>
        <p>{{$blog->price}} </p>
        <button><a href="/description/{{$blog->id}}"> Show more </a> </button>
      </div>
    </div>
  </div>
  @endforeach
</div>
@endsection