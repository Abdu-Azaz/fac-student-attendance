<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    use HasFactory;

    public function groupe(){
        return $this->belongsTo(Groupe::class, 'groupe_code');
    }

    public function professeur(){
        return $this->belongsTo(Professeur::class, 'professeur_code');
    }
 
    public function salle(){
        return $this->belongsTo(Salle::class, 'salle_code');
    }

    public function course(){
        return $this->belongsTo(Course::class, 'course_code');
    }


}
