<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Medico extends Model
{
    use HasFactory;
    protected $table = 'medicos';

    protected $fillable = [
            'nombre', 
            'especialidad' ,
            'horarios' ,
            'lunes',
            'martes',
            'miercoles',
            'jueves',
            'viernes',
            'sabado' ,
            'atiende',
            'matricula',
            'cada',
    ];

    public function turnos()
    {
        return $this->BelongsTo('App\Models\Turno', 'id', 'medico_id');
    }

    
}
