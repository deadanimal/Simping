<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContentPerformance extends Model
{
    use HasFactory;

    protected $fillable = [
        'like_count',
        'view_count',
        'comment_count',
        'share_count',
        'content_id',
    ];        

    public function content() {
        return $this->belongsTo(Content::class);
    }      
}
