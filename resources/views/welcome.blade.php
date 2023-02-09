@extends('layouts.layout') 
@section('head') 
    <title> Home </title> 
@endsection 
@section('content') 
<div class="mt-lg-5">


<div class=" row">
  <div class="col-md-6">
    <img src="{{url('image\image_prinsipale2.png')}}" alt="" srcset="" class="img-fluid">
    <p class="home-page-text"> A learning system based on formalised teaching but with the help of electronic resources is known as E-learning. While teaching can be based in or out of the classrooms, the use of computers and the Internet forms the major component of E-learning. E-learning can also be termed as a network enabled transfer of skills and knowledge, and the delivery of education is made to a large number of recipients at the same or different times. </p>
    <div class="row ">
      <div class="col-lg-2 col-3  offset-2">
        <div class="btn5">
          <form action="/course">
            <button class="btn-apply">Apply now</button>
          </form>
        </div>
      </div>
      <div class="col-md-2 col-3 offset-2   ">
        <div class="btn5">
          <form action="{{ route('info') }}">
            <button type="submit" class="btn-apply btn-learn">Learn more</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6 mt-5">
    <div>
      <img class="img-fluid" src="{{url('image\image_principale.png')}}" alt="home_image">
    </div>
  </div>
</div>
<div id="about" class=" mt-5">
  <div class="row">
    <div class="col-md-6 mt-4 offset-md-4">
      <img src="{{url('image\about_text.png')}}" alt="" class="about-img">
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <p class="about-text "> E-learning has proved to be the best means in the corporate sector.E-learning is a type of learning conducted digitally via electronic media, typically involving the internet. </p>
    </div>
  </div>
  <div class="row">
    <div class="col-md-1 d-none d-md-block ">
      <form action="{{route('login')}}">
        <button type="submit" class="btn-apply btn-register">Login</button>
      </form>
    </div>
    <div class="col-1 d-sm-none  ">
      <form action="{{route('login')}}">
        <button style="margin-left:1000%;" class=" offset-2 btn-apply btn-register-mobile ">Login</button>
      </form>
    </div>
    <div  class="offset-1 col-md-6 d-none d-md-block img-fluid">
      <img src="{{url('image\about_image.png')}}" alt="" class="img-fluid">
    </div>
  </div>
</div> 
</div>
@endsection
