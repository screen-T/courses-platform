@extends('layouts.layout')
@section('head')
<title>
    About Us
</title>
@endsection
@section('content')
<div id="about" class="start">
      <div class="row">
        <div class="col">
          <img src="{{url('image\about_text.png')}}" alt="" class="about-img">
        </div>
      </div>
      <div class="row">
        <div class="col-6 offset-3">
          <p class="about-text "> E-learning has proved to be the best means in the corporate sector.E-learning is a type of learning conducted digitally via electronic media, typically involving the internet. </p>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <img src="{{url('image\about_image.png')}}" alt="" class="image-about-principale">
        </div>
      </div>
    </div>
@endsection