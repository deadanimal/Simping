<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\BriefController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\WebController;

Route::get('', [WebController::class, 'home'])->name('home');
Route::get('brand', [WebController::class, 'home_brand'])->name('home_brand');
Route::get('creator', [WebController::class, 'home_creator'])->name('home_creator');

Route::get('about', [WebController::class, 'about'])->name('about');
Route::get('terms', [WebController::class, 'terms'])->name('terms');
Route::get('privacy', [WebController::class, 'privacy'])->name('privacy');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [WebController::class, 'dashboard'])->name('dashboard');

    Route::get('briefs/{id}', [BriefController::class, 'detail'])->name('brief.detail');
    Route::get('briefs/{brief_id}/contents/{content_id}', [ContentController::class, 'list_by_brief'])->name('content.list_by_brief');

    Route::get('/billing-portal', function (Request $request) {
        return $request->user()->redirectToBillingPortal();
    });    
});


Route::middleware('role:brand')->group(function () {    
    Route::get('briefs', [BriefController::class, 'list'])->name('brief.list');
    Route::post('briefs', [BriefController::class, 'create'])->name('brief.create');    
    Route::get('create-brief', [BriefController::class, 'create_page'])->name('brief.create_page');
    Route::put('briefs/{brief_id}/contents/{content_id}', [BriefController::class, 'approve'])->name('brief.approve');
});

Route::middleware('role:creator')->group(function () {
    Route::post('briefs/{id}/contents', [ContentController::class, 'submit'])->name('content.submit');
    Route::get('create-content', [ContentController::class, 'create_page'])->name('content.create_page');
    Route::get('contents', [ContentController::class, 'list'])->name('content.list');    
    Route::get('contents/{id}', [ContentController::class, 'detail'])->name('content.detail');    
});

Route::middleware('role:admin')->prefix('admin')->group(function () {

});


require __DIR__.'/auth.php';
