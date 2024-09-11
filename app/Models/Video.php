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
}
