<?php

namespace App\Models;

use App\Models\Type;
use App\Models\Category;
use App\Models\Reservasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_product',
        'kelengkapan',
        'foto',
        'harga',
        'category_id',
        'user_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function reservasi()
    {
        return $this->hasMany(Reservasi::class, 'product_id');
    }
}
