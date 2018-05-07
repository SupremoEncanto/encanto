<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pessoa extends Model
{

    protected $fillable = [
        'name',
        'email',
        'aniversario',
        'telefone',
        'ramal',
        'setor',
        'avatar'
    ];

    public function coristas()
    {
        return $this->hasOne(Corista::class);
    }

    public function users()
    {
        return $this->hasOne('App\User');
    }
}
