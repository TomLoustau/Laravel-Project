<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trajet extends Model
{
    //
    protected $filable = [
        'date_time_dep',
        'date_time_arr',
        'id_camp_dep',
        'id_camp_arr',
        'id_voiture',
        'id_emp'
    ];

    function campuseDep(){
        return $this->belongsTo(Campuse::class, 'id_camp_dep');
    }

    function campuseArr(){
        return $this->belongsTo(Campuse::class, 'id_camp_arr');
    }

    function voiture(){
        return $this->belongsTo(Voiture::class, 'id_voiture');
    }

    function employes(){
        return $this->belongsToMany(Employe::class, 'estPassager', 'id', 'id_emp');
    }
}
