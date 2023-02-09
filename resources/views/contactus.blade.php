@extends('layouts.layout')
@section('head')
<title>
    Contact us
</title>
@endsection
@section('content')
@if(Auth::check())
<h1>Test contact</h1> 
@endif
@endsection