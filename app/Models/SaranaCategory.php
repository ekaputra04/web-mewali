<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SaranaCategory extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['postCategory'];


    public function postCategory()
    {
        return $this->belongsTo(PostCategory::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }
}
