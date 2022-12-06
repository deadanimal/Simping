<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brief extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'brand_description',
        'brief_description',
        'caption',
        'caption_required',
        'reference_url',
        'budget',
        'status',
        'user_id'
    ];    

    public function hashtags() {
        return $this->hasMany(BriefHashtag::class);
    }   
    
    public function account_tags() {
        return $this->hasMany(BriefAccountTag::class);
    }   
    
    public function medias() {
        return $this->hasMany(BriefMedia::class);
    }    
    
    public function contents() {
        return $this->hasMany(Content::class);
    }     

    
}
