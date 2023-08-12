<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class User extends Model
{
    use HasFactory;
    protected $table = 'users';
    public function domicilioUser(){
        return $this->hasOne(UserDomicilio::class, 'user_id');
    }
    public function edad()
    {
        $fechaNacimiento = Carbon::parse($this->attributes['fecha_nacimiento']);
        return $fechaNacimiento->diffInYears(now());
    }
}
