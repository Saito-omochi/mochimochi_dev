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
        'address',
        'prefecture',
        'prefecture_id'
    ];

    public function getPaginateByLimit(int $limit_count = 5)
    {
        // updated_atで降順に並べたあと、limitで件数制限をかける
        return $this::with('category')->orderBy('updated_at', 'DESC')->paginate($limit_count);
    }

    /*public function category()
    {
        return $this->belongsTo(Category::class);
    }*/
    
    public function categories(){
        //生徒は多数の科目を履修。
        return $this->belongsToMany(Category::class);
    }
}
