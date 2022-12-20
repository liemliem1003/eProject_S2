<?php

namespace App\Http\Controllers\guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function getHome(){
        return view('guest.pages.home');
    }
}
