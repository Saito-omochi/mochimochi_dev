<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    
    public function post(){
        return $this->belongsTo(Post::class);
    }
    
    protected $fillable = [
        'comment',
        'post_id',
        'user_id'
    ];
}
