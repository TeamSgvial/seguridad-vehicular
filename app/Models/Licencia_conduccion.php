<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Licencia_conduccion extends Model
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

    public function categorias()
    {
    	return $this->belongsTo(Categoria_licencia::class, 'categoria_id');
    }
}
