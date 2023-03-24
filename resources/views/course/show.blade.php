@extends('layouts.layout') 
@section('head') 
    <title> course | {{$courses->title}} </title>
    <link rel="stylesheet" href="{{url('css\style2.css')}}"> 
@endsection 
@section('content') 
    <div class="container mt">
        <br>
        <br>
        
        <div class="row mt-md-5">
            <div class="col-md-5 mt-3 ">
            <h1 class="title-course">{{$courses->title}} :</h1>
            <br>
            <h5 class="courses-bg"> Number of lessons : </h5>
            <p> NA </p>
            <h5 class="courses-bg" >upload by :</h5>
            <p> Admin </p>
            <h5 class="courses-bg"> time needed : </h5>
            <p> 10 weeks 
            <h5 class="courses-bg"> level required :</h5>
            <p> bac science exprementale </p>
            </div>
            <div class="col mr-1 mt-3">
            <img class=" img-fluid" src="{{url($courses->image_path)}}" alt="">
            </div>
        </div>
        <hr class="container mt-md-4">
        <div class="row">
            <div class="col-md-5">
                {{-- <h1 class="title-course mt-5">chapters : </h1>
                <h5 class="courses-bg"> chapter 1 : </h5>
                      <a href="{{url('pdf/angular-part1.pdf')}}">Click here to view the PDF!</a>
                      <h5 class="courses-bg"> chapter 1 : </h5>
                      <a href="{{url('pdf/angular-part1.pdf')}}">Click here to view the PDF!</a>
                      <h5 class="courses-bg"> chapter 1 : </h5>
                      <a href="{{url('pdf/angular-part1.pdf')}}">Click here to view the PDF!</a>
                      <h5 class="courses-bg"> chapter 1 : </h5>
                      <a href="{{url('pdf/angular-part1.pdf')}}">Click here to view the PDF!</a>
                      <h5 class="courses-bg"> chapter 1 : </h5>
                      <a href="{{url('pdf/angular-part1.pdf')}}">Click here to view the PDF!</a>
                      <iframe src="{{url('pdf/angular-part1.pdf')}}" width="100%" height="600px"></iframe>    
            </div> --}}
            <h1 class="title-course mt-5">chapters :</h1>
            <ul>
            <div class="row">
                <div class="col-6">
                    <li>
                        <h4>
                            <a class="courses-bg" href="{{url('pdf/angular-part1.pdf')}}" target="pdf_viewer">File 1</a>
                        </h4>
                    </li>
                </div>
                <div class="col-6">
                    <li>
                        <h4>
                            <a class="courses-bg" href="{{url('pdf/angular-part1.pdf')}}" target="pdf_viewer">File 1</a>
                        </h4>
                    </li>

                </div>
            </div>
            <hr class=" mt-md-4">
            <div class="row">
                <div class="col-6">
                    <li>
                        <h4>
                            <a class="courses-bg" href="{{url('pdf/angular-part1.pdf')}}" target="pdf_viewer">File 1</a>
                        </h4>
                    </li>
                </div>
                <div class="col-6">
                    <li>
                        <h4>
                            <a class="courses-bg" href="{{url('pdf/angular-part1.pdf')}}" target="pdf_viewer">File 1</a>
                        </h4>
                    </li>

                </div>
            </div>
            </ul>
        </div>
	<div class="col-md-7">
         <iframe id="pdf_viewer" name="pdf_viewer" src="" class=""></iframe>
    </div>
           
        
        
    
    </div> 

@endsection