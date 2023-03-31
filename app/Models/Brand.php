<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Brand extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['name'];

    public function books()
    {
        return $this->belongsToMany(Book::class, 'books_has_brands', 'brand_id', 'book_id');
    }
}
