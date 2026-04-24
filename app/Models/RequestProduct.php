<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestProduct extends Model{

    protected $table = 'requestProducts';

    protected $fillable = [
        'request_id',
        'product_id',
        'requested_quantity',
        'approved_quantity'
    ];

    public function request()
    {
        return $this->belongsTo(Request::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
