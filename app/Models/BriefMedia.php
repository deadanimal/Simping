<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BriefMedia extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'url',
    ];    
    
    public function brief() {
        return $this->belongsTo(Brief::class);
    }     
}
