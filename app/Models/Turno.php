<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Turno extends Model
{
    use HasFactory;
    protected $guarded = [];
   
    public function medicos()
    {
        return $this->belongsTo('App\Models\Medico', 'medico_id', 'id');
    }
}
