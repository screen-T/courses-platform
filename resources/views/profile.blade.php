@extends('layouts.layout') 
@section('head')
<title>
    profile
</title>
<link rel="stylesheet" href="{{url('css\style2.css')}}">
    
@endsection
@section('content')
<div class="container rounded bg-white mt-md-5 mb-5">
    <div class="row">
      <div class=" border-right">
        <div class="d-flex flex-column align-items-center text-center p-3 py-5">
          <img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg">
          <span class="font-weight-bold">{{auth::user()->name}}</span>
          <span class="text-black-50 mt-3">+216 00 000 000 </span>
          <span class="text-black-50 mt-3">Country</span>
          <span class="text-black-50 mt-3">{{auth::user()->email}}</span>
          <span class="text-black-50 mt-3">age</span>
          <span class="text-black-50 mt-3">teacher / student</span>
          <span></span>
        </div>
      </div>
      
@endsection