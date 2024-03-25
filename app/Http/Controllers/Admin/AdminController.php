<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController 
{
    //
    public function dashoboard(){
        return view ('Admin/dashboard/home');
    }
}
