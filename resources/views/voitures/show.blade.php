@extends('layouts.base')

@section('zone2')
    <h2><u>Voiture</u></h2>
    <div>
        <u>Modèle</u> : <br>
        {{ $voiture->modele }}
    </div>

    <div>
        <u>Nb places</u> : <br>
        {{ $voiture->nb_place }}
    </div>

    <h2><u>Propriétaire : </u></h2>
    @include('partials.tableProfile')
@endsection
