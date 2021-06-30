<?php

 namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model 
{

    protected $table = 'comptes';
    public $timestamps = true;


    public function personne(){
        return $this->belongsTo (Personne::class);
    }

}