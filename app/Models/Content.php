<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;

    protected $fillable = [
        'jenis',
        'url',
        'approved_by_brand',
        'brief_id',
        'user_id',
    ];    
    
    public function brief() {
        return $this->belongsTo(Brief::class);
    }     
    
    public function user() {
        return $this->belongsTo(User::class);
    }     

    public function performance() {
        return $this->hasMany(ContentPerformance::class);
    }      
}
