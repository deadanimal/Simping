<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Content;

class ContentController extends Controller
{
    public function submit(Request $request) {
        $user = $request->user();
        $id = (int)$request->route('id');
        Content::create([
            'jenis' => $request->jenis,
            'url' => $request->url,
            'brief_id' => $id,
            'user_id' => $user->id
        ]);        
        return back();
    }

    public function list(Request $request) {
        $user = $request->user();        
        $contents = Content::where('user_id', $user->id)->get();
        return view('contents', compact('contents'));
    }

    public function detail(Request $request) {
        $user = $request->user(); 
        $id = (int)$request->route('id');
        $content = Content::where([
            ['id', '=', $id],
            ['user_id', '=', $user->id],
        ])->first();    
        return view('content', compact('content'));
    }
}
