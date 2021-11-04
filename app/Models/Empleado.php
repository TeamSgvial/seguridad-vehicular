<?php

namespace App\Models;

use App\Models\Afp;
use App\Models\Arl;
use App\Models\Cesantia;
use App\Models\Contrato;
use App\Models\Eps;
use App\Models\Licencia_conduccion;
use App\Models\Soat;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empleado extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function licencia()
    {
        return $this->hasMany(Licencia_conduccion::class);
    }

    public function vehiculo()
    {
        return $this->hasMany(Vehiculo::class);
    }

    public function soat()
    {
        return $this->hasMany(Soat::class);
    }

    public function tecnicomecanica()
    {
        return $this->hasMany(Tecnicomecanica::class);
    }

    public function cesantia()
    {
        return $this->hasOne(Cesantia::class);
    }

    public function afp()
    {
        return $this->hasOne(Afp::class);
    }

    public function arl()
    {
        return $this->hasOne(Arl::class);
    }

    public function eps()
    {
        return $this->hasOne(Eps::class);
    }

    public function contratos()
    {
        return $this->hasOne(Contrato::class);
    }

    // Relacion del empleado a sus usuarios
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
