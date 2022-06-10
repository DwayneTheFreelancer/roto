<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    
    public function services()
    {
        return view('pages.services');
    }
    
    public function contact()
    {
        return view('pages.contact');
    }
    
    public function story()
    {
        return view('pages.story');
    }
}
