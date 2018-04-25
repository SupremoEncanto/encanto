<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ensaio extends Model
{
    protected $fillable = [
        'date',
        'regular'
    ];

    public function chamadas()
    {
        return $this->hasMany(Chamada::class);
    }
}
