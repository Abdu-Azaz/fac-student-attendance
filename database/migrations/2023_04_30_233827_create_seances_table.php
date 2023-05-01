<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->unsignedSmallInteger('course_code');
            $table->unsignedSmallInteger('professeur_code');
            $table->unsignedSmallInteger('salle_code');
            $table->unsignedSmallInteger('groupe_code');
            $table->unsignedSmallInteger('heure_debut');
            $table->unsignedSmallInteger('heure_fin');
            $table->date('date'); 
            
            $table->foreign('course_code')->references('id')->on('courses')->onDelete("cascade");
            $table->foreign('professeur_code')->references('id')->on('professeurs')->onDelete("cascade");
            $table->foreign('salle_code')->references('id')->on('salles')->onDelete("cascade");
            $table->foreign('groupe_code')->references('id')->on('groupes')->onDelete("cascade");

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seances');
    }
};
