<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model{

    protected $table = 'products';

    protected $fillable = [
        'name',
        'description',
        'current_stock'
    ];

    public function entradas()
    {
        return $this->hasMany(input::class);
    }

    public function requestProducts()
    {
        return $this->hasMany(RequestProduct::class);
    }

    public function output()
    {
        return $this->hasMany(Output::class);
    }
}
