<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corista extends Model
{

    protected $fillable = [
        'joined_at',
        'naipe_id',
        'pessoa_id',
        'left_on'
    ];

    public function pessoas()
    {
        return $this->belongsTo(Pessoa::class, 'pessoa_id');
    }

    public function naipes()
    {
        return $this->belongsTo(Naipe::class, 'naipe_id');
    }

    public function chamadas()
    {
        return $this->hasMany(Chamada::class);
    }
}
