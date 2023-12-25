<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;


class Sarana extends Model
{
    use HasFactory;
    use Sluggable;


    protected $guarded = ['id'];
    // protected $fillable = ['nama_sarana', 'slug', 'nama_toko', 'no_telepon', 'harga', 'deskripsi'];
    protected $with = ['category', 'usaha'];

    public function category()
    {
        return $this->belongsTo(SaranaCategory::class);
    }

    public function usaha()
    {
        return $this->belongsTo(Usaha::class, 'usaha_id');
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_sarana', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%');
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
                'source' => 'nama_sarana'
            ]
        ];
    }
}
