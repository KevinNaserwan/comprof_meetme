<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingController extends Controller
{
    //function call
    public function index() {
        return view('landing');
    }
}
