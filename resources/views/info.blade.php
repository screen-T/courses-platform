@extends('layouts.layout')
@section('head')
<title>
    Info
</title>
@endsection
@section('content')	
<form action="/" method="get" >
    @csrf
    <div class="row mt-5">
        <div class="col-6">
            <h1>test</h1>
            <input type="text" name="test" id="test1" class="form-control" placeholder="test">
        </div>
        <div class="col-6">
            <h1>clik</h1>
            <button type="submit" class="btn btn-success ">clickhere</button>
        </div>
    </div>
</form>
@endsection