<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Absence extends Model
{
    use HasFactory;

    public function etudiants(){
        return $this->hasMany(Etudiant::class);
    }

    public function groupe(){
        return $this->hasOne(Groupe::class);
    }
}
