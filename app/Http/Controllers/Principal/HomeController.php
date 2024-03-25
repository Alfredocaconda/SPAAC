<?php

namespace App\Http\Controllers\Principal;

class HomeController{
    public function index(){
        return view ('principal/Home/home');
    }
}