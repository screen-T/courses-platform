@extends('layouts.layout') @section('head')
<link rel="stylesheet" href="{{url('css\style2.css')}}">
<title> create </title> 
@endsection 
@section('content') 
<div class="">
  <div class="box">
    <form action="/course" method="POST"  enctype="multipart/form-data">
      @csrf
      <h2 class="title"> 
        Create your own course 
      </h2>
      <div class="row">
            <div class="col-lg-3  margin-p">
               Title : 
              </div>
                <div class="col-lg-6 col mt-2">
                <div class="form-floating">
                    <input type="text" name="title" placeholder="Click to enter your course title " id="title" class="form-control input-create">
                    <label for="title" class="label">
                      Click to enter your course title
                    </label>
                </div>
                </div>
        </div>
    
      <div class="row">
        <div class="col-lg-3  margin-p"> Description 1: </div>
        <div class="col-lg-6 col mt-2">
          <div class="form-floating">
            <input id="short_description" type="text" name="short_description" placeholder="Click to enter short description " class="form-control input-create">
            <label for="short_description" class="label">Click to enter short description</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3  margin-p"> Description 2: </div>
        <div class="col-lg-6 col mt-2">
          <div class="form-floating">
            <textarea name="description" placeholder="Click to enter full description " id="description" class="form-control input-create  " cols="40" rows="6" style="height: 80px"></textarea>
            <label for="description" class="label">Click to enter full description</label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3  margin-p"> 
          image: 
        </div>
        <div class="col-lg-6 col mt-2">
          <div class="">
            <input type="file" name="image_path" id="image" class="form-control input-create ">
          </div>
        </div>
        <div class="row">
            <div class="offset-3 offset-sm-3 col-sm-2 col-4 mt-4 ">
              
                <button type="submit" class="btn-apply btn-register-mobile">Add new course</button>
              
            </div>
          
          </div>
      </div> 
      @section('footer') 
      @stop
    </form>
  </div>
</div> @endsection