<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model 
{

    protected $table = 'niveaux';
    public $timestamps = true;

    public function etudiant(){
        return $this->hasMany (Etudiant::class);
}
public function module(){
    return $this->hasMany (Module::class);
}
}