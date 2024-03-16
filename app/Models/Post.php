<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'category_id',
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('prefecture')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class);
    }
    
    public function prefecture(){
        return $this->belongsTo(Prefecture::class);
    }
    
    public function comments(){
        return $this->hasMany(Comment::class);
    }
}
