<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'product_name',
        'category_id',
        'size_id',
        'shape_id',
        'material_id',
        'price',
        'stock',
        'image',
        'status',
        'description'
    ];

    // Category relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function size()
    {
        return $this->belongsTo(Size::class);
    }

    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }

    public function material()
    {
        return $this->belongsTo(Material::class);
    }
}