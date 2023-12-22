<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['nama_sarana', 'slug', 'nama_toko', 'no_telepon', 'harga', 'deskripsi'];
    protected $with = ['saranaCategory'];


    public function getRouteKeyName()
    {
        return "slug";
    }

    public function saranaCategory()
    {
        return $this->belongsTo(SaranaCategory::class);
    }

    public function scopeFilter($query, array $filters)
    {
        $query->when($filters['search'] ?? false, function ($query, $search) {
            return $query->where('nama_sarana', 'like', '%' . $search . '%')
                ->orWhere('nama_toko', 'like', '%' . $search . '%')
                ->orWhere('no_telepon', 'like', '%' . $search . '%')
                ->orWhere('deskripsi', 'like', '%' . $search . '%');
        });

        $query->when($filters['category'] ?? false, function ($query, $category) {
            return $query->whereHas('category', function ($query) use ($category) {
                $query->where('slug', $category);
            });
        });
    }
}
