<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $fillable = [
        'name',
        'email',
        'aniversario'
    ];

    public function coristas()
    {
        return $this->hasOne('App\Corista');
    }

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
