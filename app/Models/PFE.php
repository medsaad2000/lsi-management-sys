<?php

namespace App\Models;

use App\Models\Professeur;
use App\Models\Etudiant;
use Illuminate\Database\Eloquent\Model;

class PFE extends Model 
{

    protected $table = 'pfe';
    public $timestamps = true;

    public function professeur(){
        return $this->belongsTo (Professeur::class);

    }

    public function etudiant(){
        return $this->hasMany (Etudiant::class);
}



}