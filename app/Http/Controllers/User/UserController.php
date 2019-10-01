<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('home');
    }
    public function post(){
        return view('post');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
}
