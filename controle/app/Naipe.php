<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Naipe extends Model
{
    public function coristas()
    {
        return $this->hasMany(Corista::class);
    }
}
