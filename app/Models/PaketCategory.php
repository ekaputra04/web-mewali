<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketCategory extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function paket()
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
                'source' => 'name'
            ]
        ];
    }
}
