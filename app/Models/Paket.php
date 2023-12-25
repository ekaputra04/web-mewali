<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Paket extends Model
{
    use HasFactory;
    use Sluggable;


    protected $guarded = ['id'];
    protected $with = ['category', 'usaha'];
    // protected $with = ['usaha'];

    public function category()
    {
        return $this->belongsTo(PaketCategory::class);
    }

    public function usaha()
    {
        return $this->belongsTo(Usaha::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_paket', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%')
                ->orWhere('includes', 'like', '%' . $search . '%')
                ->orWhere('notes', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
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
