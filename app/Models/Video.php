<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function comments(){
        return $this->morphMany(Comment::class, 'comment'); // second param, name of the function which makes the Comments table as morphTo();
    }

    public function latestComment(){
        return $this->morphOne(Comment::class, 'comment')
                    ->latestOfMany();
    }

    public function oldestComment(){
        return $this->morphOne(Comment::class, 'comment')
                    ->oldestOfMany();
    }

    public function bestComment(){
        return $this->morphOne(Comment::class, 'comment')
                    ->ofMany('likes', 'max');
    }

    public function leastLikedComment(){
        return $this->morphOne(Comment::class, 'comment')
                    ->ofMany('likes', 'min');
    }
}
