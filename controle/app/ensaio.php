<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ensaio extends Model
{
    public function chamadas()
    {
        return $this->hasMany(Chamada::class);
    }
}
