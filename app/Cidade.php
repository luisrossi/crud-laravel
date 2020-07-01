<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    public function cliente() {
        return $this->hasMany("App\Cliente", 'cliente_id');
    }
}
