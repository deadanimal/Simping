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

    public function about(Request $request) {
        return view('about');
    }
    
    public function terms(Request $request) {
        return view('terms');
    }
    
    public function privacy(Request $request) {
        return view('privacy');
    }    

    public function dashboard(Request $request) {
        $user = $request->user();
        if ($user->hasRole('admin')) {
            return view('dashboard_admin', compact('user'));
        } else {
            return view('dashboard', compact('user'));
        }
    }
}
