<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Groupe extends Model
{
    use HasFactory;

    public function filiere(){
        return $this->belongsTo(Filiere::class);
    }

    public function niveau_scolaire(){
        return $this->belongsTo(NiveauScolaire::class);
    }

    // public function seance(){
    //     return $this->hasOne(Seance::class);
    // }
}
