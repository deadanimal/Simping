<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{

    public function home(Request $request) {
        return view('home');
    }

    public function dashboard(Request $request) {
        $user = $request->user();
        return view('dashboard');
    }
}
