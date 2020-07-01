<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = ['nome','cidades_id'];

    public function cidade() {
    	return $this->belongsTo("App\Cidade", 'cidades_id');
    }
}
