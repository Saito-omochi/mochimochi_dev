<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function posts()
    {
        return $this->hasMany(Post::class);
    }

    public function getByCategory(int $limit_count = 5)
    {
        return $this->posts()->with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }
    
    public function posts(){
    //1つの科目を多数の生徒が履修。
        return $this->belongsToMany(Post::class);
    }
}
