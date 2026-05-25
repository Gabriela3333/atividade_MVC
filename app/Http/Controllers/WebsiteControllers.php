<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class WebsiteControllers extends Controller{
    public function home(){
        return view('home');
    }
    public function explore(){
        return view('explore');
    }
    public function messages(){
        return view('messages');
    }
     public function notification(){
        return view('notification');
    }
    public function profile(){
        return view('profile');
    }
    public function reels(){
        return view('reels');
    }
    public function sign_up(){
        return view('sign_up');
    }
     public function login(){
        return view('login');
    }
 };

 