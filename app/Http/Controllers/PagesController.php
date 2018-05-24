<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //passing values into our blade template
    public function index(){
        $title ='Laracom Projects!';
        // return view('pages.index',compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title ='About Us!';
        return view('pages.about',compact('title'));
    }

    public function services(){
        $data = array(
            'title'=> 'Welcome to Laravel',
            'services'=>['web design','programming','Seo']
        );
        return view('pages.services')->with($data);
    }
}
