<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use PFE\PFE;

class Etudiant extends Model 
{

    protected $table = 'etudiants';
    public $timestamps = true;

    public function niveau(){
        return $this->belongsTo (Niveau::class);

    }

    public function pfe(){
        return $this->belongsTo (PFE::class);
    }

    

}