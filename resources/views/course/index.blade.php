@extends('layouts.layout')
@section('head')
<title>
    Programs

</title>

@endsection
@section('content')
<div class="content">
<div class="mt-lg-5">
<div class="container">
  <div class="row">
    <div class="offset-sm-10 offset-7  col-sm-2 col-4 mt-4 ">
      <form action="course/create" >
        <button type="submit" class="btn-apply btn-register-mobile">Add new course</button>
      </form>
    </div>
  
  </div>
  
</div>

<hr class="container mt-md-4">
@foreach ($courses as $course )
  <div class="row">
    <div class="col-md-6">
      <div class="offset-md-1 program-content mt-md-3">
        <img class="course-image img-fluid" src="{{$course->image_path}}" alt="">
      </div>
    </div>
    <div class="col-md-5">
      <div class="program-content-description mt-md-3">
        <h1> {{$course->title}}</h1>
        <p> {{$course->description}}</p>
        <form action="course/{{$course->slug}}" class="offset-md-8">
          <button class="btn-apply">Apply now</button>
        </form>
      </div>
    </div>
  </div>
  </div>
  </div>
  <hr class="container mt-md-4">
@endforeach
@endsection