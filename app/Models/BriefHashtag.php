<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BriefHashtag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
    ];    
    
    public function brief() {
        return $this->belongsTo(Brief::class);
    }     
}
