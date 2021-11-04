<?php

namespace App\Models;

use App\Models\Empleado;
use App\Models\User;
use App\Models\Vehiculo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Soat extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function empleado()
    {
    	return $this->belongsTo(Empleado::class, 'empleado_id');
    }

    public function vehicle()
    {
    	return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}
