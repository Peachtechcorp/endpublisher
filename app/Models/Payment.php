<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Payment extends Model
{
    use HasFactory;
    public $fillable = ['payable_type', 'payable_id', 'transid', 'reference', 'result', 'resultcode', 'payment_status', 'amount'];

    public $incrementing = false;

    public function payable()
    {
        return $this->morphTo();
    }

    public static function boot()
    {
        parent::boot();
        static::creating(function ($model) {
            $model->id = (string) Str::uuid();
        });

        static::addGlobalScope("order", function (Builder $builder) {
            $builder->latest();
        });
    }

    public function scopeIsActive($query)
    {
        return $query->where("payment_status", "COMPLETED");
    }

    public function getPaidAttribute()
    {
        return $this->payment_status == "COMPLETED";
    }
}
