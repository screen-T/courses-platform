<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\course ;
use Illuminate\Support\Str;


class coursescontroller extends Controller
{    
    public function index()
    {

        return view('course.index')->with("courses",course::get())  ;
    }

    public function create()
    {
        return view('course.create') ; 
    }
    public function store(Request $request)
    {
        $request->validate([
            "title"=>"required"
        ]);
        $slug=Str::slug($request->title,"-") ;
        $imagename='images/'.uniqid().'-'.$slug.".".$request->image_path->extension() ;
        $request->image_path->move(public_path('images'),$imagename) ;

        course::create([
            "slug"=>$slug,
            "short_description"=>$request->input("short_description") ,
            "description"=>$request->input("description"),
            "title"=>$request->input("title"),
            "image_path"=>$imagename
        ]);
        return redirect("/course") ;
    }
    public function show($slug)
    {
        return view('course.show')->with('courses',course::where('slug',$slug)->first()) ;
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
