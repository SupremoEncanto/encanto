<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class chamada extends Model
{
    public function ensaios()
    {
        return $this->belongsTo(Ensaio::class, 'ensaio_id');
    }

    public function coristas()
    {
        return $this->belongsToMany(Corista::class, 'corista_id');
    }
}
