<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sector extends Model{
    protected $table = 'sectors';

    protected $fillable = ['name'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
