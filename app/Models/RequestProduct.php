<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestProduct extends Model{

    protected $table = 'requestProducts';

    protected $fillable = [
        'name',
        'request_id',
        'product_id',
        'requested_quantity',
        'approved_quantity'
    ];

    public function request()
    {
        return $this->belongsTo(RequestModel::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }

}
