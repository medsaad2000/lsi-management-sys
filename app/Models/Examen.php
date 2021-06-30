<?php

namespace App\Models;

use App\Models\Etudiant;
use App\Models\Module;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model 
{

    protected $table = 'examens';
    public $timestamps = true;

    public function etudiant(){
        return $this->belongsTo (Etudiant::class);
    }

    public function module(){
        return $this->belongsTo (Module::class);
    }


}