<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;

    // function name same as the name of coloumn which stores comment type id before '_'
    // $table->unsignedBigInteger('comment_id')->comment('Id of type of Comment');
    public function comment(){
        $this->morphTo();
    }
}
