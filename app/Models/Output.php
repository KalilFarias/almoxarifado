<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Output extends Model{

    protected $table = 'output';

    protected $fillable = [
        'request_id',
        'product_id',
        'quantity',
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
