<?php

namespace App\Models\Order;

use App\Models\Book;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['order_item_id', 'product_id', 'quantity', 'price'];
    public function order()
    {
        return $this->belongsTo(OrderItem::class, 'order_item_id');
    }


    public function book()
    {
        return $this->belongsTo(Book::class, 'product_id');
    }
}
