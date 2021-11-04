<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Vehiculo extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function propietario()
    {
    	return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function soats()
    {
        return $this->hasMany(Soat::class);
    }

    public function tecnicomecanica()
    {
        return $this->hasMany(Tecnicomecanica::class);
    }


    public function getUrlPathAttribute()
    {
    	return Storage::url($this->fotografia);
    }
}
