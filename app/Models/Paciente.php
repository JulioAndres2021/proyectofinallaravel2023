<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Paciente extends Model
{
    use HasFactory;
    protected $table = 'pacientes';

    protected $fillable = [
            // 'nombre', 
            // 'apellido' ,
            // 'dni' ,
            // 'direccion',
            // 'localidad',
            // 'provincia',
            // 'telefono',
            // 'mail',
            // 'obrasocial' ,
            // 'ocupacion',
    ];

    public function turno(): HasOne
    {
        //aca se conecta a la clase turno para retornar todos los id relacionados que contenga
        return $this->hasOne(Turno::class);
    }

    
}
