<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class daytwoController extends Controller
{
    public function index(){
        return view('daytwo');
    }

    public function demo(){
    	return view('demo');
    } 
}
}
