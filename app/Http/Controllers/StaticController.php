<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{
    public function home()
    {
        return view('welcome') ;
    }
    
    public function info()
    {
        return view('info') ;
    }
    
    public function aboutus()
    {
        return view('aboutus') ;
    }
    
    public function contactus()
    {
        return view('contactus') ;
    }
    
    public function programs()
    {
        return view('programs') ;
    }
}
