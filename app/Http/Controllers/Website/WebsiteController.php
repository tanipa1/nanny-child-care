<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function about(){
        return view('client.about');
    }

    public function services(){
        return view('client.services');
    }

    public function contact(){
        return view('client.contact');
    }

    public function login(){
        return view('welcome');
    }
}
