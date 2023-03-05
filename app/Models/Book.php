<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'author', 'year_published', 'isbn', 'pages', 'price', 'featured_image', 'product_id'
    ];

    public function books()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

    public function categoryies(): BelongsToMany
    {
        return $this->belongsToMany(Category::class, 'book_categories', 'book_id', 'category_id');
    }
    protected function featuredImage(): Attribute
    {
        return Attribute::make(fn ($val) => Storage::url($val));
    }
}
