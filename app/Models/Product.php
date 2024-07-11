<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;


class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'promotion', 'size', 'color', 'image', 'description', 'stock','category',
    ];

    protected $casts = [
        'promotion' => 'boolean',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
