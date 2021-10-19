<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competidor extends Model
{
    use HasFactory;

    public function equipos()
    {
        return $this->belongsToMany(Equipos::class);
    }

    public function pagos_id()
    {
        return $this->hasMany(Pagos_id::class);
    }

}
