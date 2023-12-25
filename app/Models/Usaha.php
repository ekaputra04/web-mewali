<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Usaha extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function saranas()
    {
        return $this->hasMany(Sarana::class);
    }

    public function pakets()
    {
        return $this->hasMany(Paket::class);
    }

    public function getRouteKeyName()
    {
        return "slug";
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }
}
