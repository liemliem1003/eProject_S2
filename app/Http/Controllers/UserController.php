<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
  
    public function getHome(){
        return view('user.pages.home');
    }
     public function getAbout(){
        return view('user.pages.about.about');
     }
    public function getcontact()
    {
        return view('user.pages.contact.contact');
    }
}
