@extends('layouts.app')

<?php //use Carbon/Carbon ?>

@section('content')
{{--     
@foreach ($data as $seance)
<h2>Seance Numéro: {{$loop->index+1}}</h2>
<h4>Séance ID: {{$seance->id}} </h4>
<h4>Groupe Name: {{$seance->groupe->label}}</h4>
<h4>Filiere: {{$seance->groupe->filiere->label}}</h4>
<h4>Niveau Scolaire: {{$seance->groupe->niveau_scolaire->label}}</h4>
<h4>Course Name: {{$seance->course->label}}</h4> 
<h4>Professor:  {{$seance->professeur->firstName}} {{$seance->professeur->lastName}}</h4>
<h4>temps: de {{$seance->heure_debut}} à {{$seance->heure_fin}}</h4>
<h4>Salle: {{$seance->salle->label}}</h4>
    <hr>

@endforeach --}}
<div class="container">
    <h1 class="display-4">Séance de {{$datetime}}</h1>
  <div class="table-responsive">
        <table class="table  table-hover table-stripe">
            <thead>
                <tr>
                    <th scope="col">Seance ID</th>
                    <th scope="col">Matière</th>
                    <th scope="col">Groupe</th>
                    <th scope="col">Filiere</th>
                    <th scope="col">Niveau Scolaire</th>
                    <th scope="col">Professeur</th>
                    <th scope="col">Salle</th>
                    <th scope="col">Temps</th>
                    <th scope="col">Date de séance</th>
                </tr>
            </thead>
            <tbody>
                @foreach($data as $seance)
                <tr class="">
                    <td scope="row">{{$seance->id}}</td>
                    <td scope="row">{{$seance->course->label}}</td>
                    <td scope="row">{{$seance->groupe->label}}</td>
                    <td scope="row">{{$seance->groupe->filiere->label}}</td>
                    <td scope="row">{{$seance->groupe->niveau_scolaire->label}}</td>
                    <td scope="row">{{$seance->professeur->firstName}} {{$seance->professeur->lastName}} </td>
                    <td scope="row">{{$seance->salle->label}}</td>
                    <td scope="row">de {{$seance->heure_debut}} à {{$seance->heure_fin}}</td>
                    <td scope="row">le {{$seance->date}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @endsection
</div>

