<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sarana extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $fillable = ['nama_sarana', 'nama_toko', 'no_teleponn', 'harga', 'deskripsi'];

    public function getRouteKeyName()
    {
        return "slug";
    }
}
