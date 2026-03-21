<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    protected $table = 'voiture';
    protected $filable = [
        'modele',
        'nb_places',
        'id_proprio'
    ];

    public function employe(){
        return $this->belongsTo(Employe::class, 'id_proprio');
    }

    public function trajets(){
        return $this->hasMany(Trajet::class, 'id_trajet');
    }


}
