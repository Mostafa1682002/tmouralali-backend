<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageProduct extends Model
{
    use HasFactory;
    protected $fillable = [
        'image', 'product_id'
    ];

    protected function image(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset("uploads/products/$value"),
            // set: fn (string $value) => strtolower($value),
        );
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
