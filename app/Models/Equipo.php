<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    public function competidores()
    {
        return $this->belongsToMany(Competidores::class);
    }

    public function partidas()
    {
        return $this->belongsToMany(Partidas::class);
    }
}
