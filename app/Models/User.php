<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $fillable = ['name', 'email', 'password', 'sector_id', 'profile_id'];
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    public function sector()
    {
        return $this->belongsTo(Sector::class);
    }

    public function profile()
    {
        return $this->belongsTo(Profile::class);
    }

    public function Prohibited()
    {
        return $this->hasMany(input::class);
    }

    public function requests()
    {
        return $this->hasMany(Request::class);
    }
}
