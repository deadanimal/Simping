<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(Request $request) {
        return view('home');
    }

    public function home_brand(Request $request) {
        return view('home-brand');
    }
    
    public function home_creator(Request $request) {
        return view('home-creator');
    }    

    public function dashboard(Request $request) {
        $user = $request->user();
        return view('dashboard');
    }
}
