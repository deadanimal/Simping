<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Brief;
use App\Models\BriefAccountTag;
use App\Models\BriefHashtag;
use App\Models\BriefMedia;
use App\Models\Content;

class BriefController extends Controller
{
    public function create(Request $request) {
        $user = $request->user();     
        Brief::create([
            'title' => $request->title,
            'brand_description' => $request->brand_description,
            'brief_description' => $request->brief_description,
            'reference_url' => $request->reference_url,
            'status' => 'created',
            'user_id' => $user->id
        ]);       

        return $user->checkout('price_1MC1loClxcdjv5cS9bumv71Y');


//        $user->checkoutCharge($brief_charge, 'Simping Brief: '.$brief->title, 1);
        //return back();
    }

    public function create_page(Request $request) {
        $user = $request->user(); 
        if($user->hasRole('brand')) {
            return view('brief-create');
        } else {
            return back();
        }
    }

    public function update_brief(Request $request) {

        $user = $request->user(); 
        $id = (int)$request->route('id');

        $brief = Brief::where([
            ['id', '=', $id],
            ['user_id', '=', $user->id],
        ])->first();           

        foreach($request->account_tags as $account_tag) {
            BriefAccountTag::create([
                'title' => $account_tag,
                'brief_id' => $brief->id
            ]);
        }

        foreach($request->hashtags as $hashtag) {
            BriefHashtag::create([
                'title' => $hashtag,
                'brief_id' => $brief->id
            ]);
        }   
        
        foreach($request->pics as $pic) {
            BriefMedia::create([
                'jenis' => 'picture',
                'url' => $pic,
                'brief_id' => $brief->id
            ]);
        } 
        
        foreach($request->videos as $video) {
            BriefMedia::create([
                'jenis' => 'video',
                'url' => $video,
                'brief_id' => $brief->id
            ]);
        }            
        // 'caption' => $request->caption,
        // 'caption_required' => $request->caption_required, 
        // 'budget' => $request->budget,
        // 'budget_per_content' => $request->budget_per_content,        
        
        return back();
    }

    public function list(Request $request) {
        $user = $request->user();        
        $briefs = Brief::where('user_id', $user->id)->get();
        return view('briefs', compact('briefs'));
    }

    public function detail(Request $request) {
        $user = $request->user(); 
        $id = (int)$request->route('id');
        $brief = Brief::where([
            ['id', '=', $id],
            ['user_id', '=', $user->id],
        ])->first();    
        return view('brief', compact('brief'));
    }

    public function approve_content(Request $request) {
        $user = $request->user(); 
        $brief_id = (int)$request->route('brief_id');
        $content_id = (int)$request->route('content_id');
        $brief = Brief::where([
            ['id', '=', $brief_id],
            ['user_id', '=', $user->id],
        ])->first();    
        $content = Content::where([
            ['id', '=', $content_id],
            ['brief_id', '=', $brief->id],
        ])->first();
        $content->approved_by_brand = true;
        return back();
    }    

    // public function increase_budget(Request $request) {
    //     $user = $request->user(); 
    //     $id = (int)$request->route('id');
    //     $brief = Brief::where([
    //         ['id', '=', $id],
    //         ['user_id', '=', $user->id],
    //     ])->first(); 
    //     $brief_charge = (int)($request->budget * 1.3);
    //     $user->checkoutCharge($brief_charge, '(Increase Budget) Simping Brief: '.$brief->title, 1);
    //     return back();          
    // }
}
