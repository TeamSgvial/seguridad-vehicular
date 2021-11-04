<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tecnicomecanica extends Model
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

    public function vehiculo()
    {
    	return $this->belongsTo(Vehiculo::class, 'vehiculo_id');
    }
}
