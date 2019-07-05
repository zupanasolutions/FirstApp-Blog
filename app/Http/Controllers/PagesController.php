<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'welcome to laravel!';

        return view('pages.index', compact('title'));
    }

    public function services(){
       $services = 'Services';

       return view('pages.services', compact('services'));
    }

    public function about(){
        $about = 'About ZuPas SoftImpact';

        return view('pages.about', compact('about'));
    }
}
