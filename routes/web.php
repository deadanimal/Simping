<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BriefController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\WebController;

Route::get('/', function () {
    return redirect('/dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [WebController::class, 'dashboard'])->name('dashboard');

    Route::get('briefs', [BriefController::class, 'list'])->name('brief.list');
    Route::get('briefs/{id}', [BriefController::class, 'detail'])->name('brief.detail');
    Route::get('briefs/{brief_id}/contents/{content_id}', [ContentController::class, 'list_by_brief'])->name('content.list_by_brief');
});


Route::middleware('role:brand')->group(function () {    
    Route::post('briefs', [BriefController::class, 'create'])->name('brief.create');    
    Route::put('briefs/{brief_id}/contents/{content_id}', [BriefController::class, 'approve'])->name('brief.approve');
});

Route::middleware('role:creator')->group(function () {
    Route::post('briefs/{id}/contents', [ContentController::class, 'submit'])->name('content.submit');

    Route::get('contents', [ContentController::class, 'list'])->name('content.list');    
    Route::get('contents/{id}', [ContentController::class, 'detail'])->name('content.detail');
});

Route::middleware('role:admin')->prefix('admin')->group(function () {

});


require __DIR__.'/auth.php';
