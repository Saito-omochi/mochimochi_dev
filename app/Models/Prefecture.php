<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prefecture extends Model
{
    use HasFactory;
    
    public function posts()   
    {
        return $this->hasMany(Post::class);  
    }
    
    public function getByPrefecture(int $limit_count = 5)
    {
        return $this->posts()->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
}
