<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RequestModel extends Model{

    protected $table = 'requests';

    protected $fillable = [
        'user_id',
        'sector_id',
        'status'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function product()
    {
        return $this->hasMany(RequestProduct::class);
    }

    public function output()
    {
        return $this->hasMany(Output::class);
    }

}
