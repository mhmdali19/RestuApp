<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //

    public function index(){
        $title='index page !!';
       /// return view('pages.index',compact('title'));////to pass a value to ather page use compact
       /////another way to pass value
       return view('pages.index');
    }

    public function about(){

        return view('pages.about');
    }

    public function feedback(){

        return view('pages.feedback');
    }

    public function menu(){

        return view('pages.menu');
    }

    public function reservation(){

        return view('pages.reservation');
    }
}
