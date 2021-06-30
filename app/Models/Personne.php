<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Personne extends Model 
{

    protected $table = 'personnes';
    public $timestamps = true;

    public function compte(){
        return $this->hasOne (Compte::class);
}

}