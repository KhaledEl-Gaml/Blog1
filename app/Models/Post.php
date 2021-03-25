<?php

namespace App\Models;
use Cviebrock\EloquentSluggable\Sluggable;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use sluggable;


    protected $fillable = [
        'title',
        'description',
        'user_id',
        'slug'
    ];
    public function user() { //Foreign Key UserID
        return $this->belongsTo(User::class,"user_id", "id");
    }
    public function sluggable(): array {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}

