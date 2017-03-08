<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = "Post";

    // 
    public function owner () {
        return $this->belongsTo(User::class, 'ownerID');
    }
    //
    public function comment () {
        return $this->hashMany(Comment::class, 'ownerPost');
    }
}
