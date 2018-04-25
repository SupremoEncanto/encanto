<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Chamada extends Model
{
    protected $fillable = [
        'corista_id',
        'ensaio_id'
    ];

    public function ensaios()
    {
        return $this->belongsTo(Ensaio::class, 'ensaio_id');
    }

    public function coristas()
    {
        return $this->belongsToMany(Corista::class, 'corista_id');
    }
}
