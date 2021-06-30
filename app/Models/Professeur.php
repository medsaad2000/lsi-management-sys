<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PFE\PFE;

class Professeur extends Model {


    protected $table = 'professeurs';
    public $timestamps = true;

    public function pfe(){
        return $this->hasMany (PFE::class);
    
}

public function module(){
    return $this->hasMany (Module::class);
}
}