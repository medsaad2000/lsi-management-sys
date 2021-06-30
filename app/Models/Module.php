<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Module extends Model 
{

    protected $table = 'modules';
    public $timestamps = true;

    public function niveau(){
        return $this->belongsTo (Niveau::class);

    }

    public function professeur(){
        return $this->belongsTo (Professeur::class);
    }

}