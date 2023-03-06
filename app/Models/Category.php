<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Category extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'featured_image'
    ];
    protected function featuredImage(): Attribute
    
    {
        return Attribute::make(fn ($val) => Storage::url($val));
    }


    public function products()
    {
        return $this->belongsToMany(Product::class, 'products_categories', 'category_id', 'product_id');
    }
}