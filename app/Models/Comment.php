<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    protected $with = ['inPost'];

    public function inPost()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }
}
