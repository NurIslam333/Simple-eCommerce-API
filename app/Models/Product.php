<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'price',
        'category_id',
        'image',
        'rating_rate',
        'rating_count',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
