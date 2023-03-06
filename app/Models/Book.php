<?php

namespace App\Models;

use Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Storage;

class Book extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name', 'description', 'author', 'year_published', 'isbn', 'pages', 'price', 'featured_image'
    ];
    protected function featuredImage(): Attribute {
        return Attribute::make(fn ($val) => Storage::url($val));
    }
}

