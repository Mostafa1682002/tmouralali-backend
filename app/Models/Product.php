<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;


    protected $fillable = [
        'name', 'price',
        'description',
        'active', 'main_image',
    ];


    protected function mainImage(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => asset("uploads/products/$value"),
            // set: fn (string $value) => strtolower($value),
        );
    }


    public function images()
    {
        return $this->hasMany(ImageProduct::class);
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->withPivot('price', 'qty');
    }
}
