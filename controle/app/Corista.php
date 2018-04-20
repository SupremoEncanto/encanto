<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Corista extends Model
{

    protected $fillable = [
        'joined_at',
        'naipe'
    ];

    public function pessoas()
    {
        return $this->belongsTo('App\Pessoa');
    }
}
