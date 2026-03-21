<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model
{
    //
    protected $filable = [
        'nom',
        'prenom',
        'email',
        'id_trajet',
        'id_camp'
    ];


    public function voitures(){
        return $this->hasMany(Voiture::class, 'id_proprio');
    }

    public function trajet(){
        return $this->belongsToMany(Trajet::class, 'estPassager', 'id', 'id_trajet');
    }

    public function campuses(){
        return $this->belongsToMany(Campuse::class, 'frequente', 'id', 'id_camp');
    }

    public function voitureCount($id){
        $employe = Employe::find($id);
        $voiture = $employe->voitures()->count();
        return $voiture;
    }

    public function statutEmp($id){
        $employe = Employe::find($id);
        $voitures = $employe->voitures()->count();
        if($voitures > 1){
            return "Conducteur très actif";
        }
        if($voitures > 0){
            return "Conducteur";
        }
        else{
            return "Pas conducteur";
        }
    }

    public function possedeModele($id, $modele){
        $employe = Employe::find($id);
        $possedeModele = $employe->voitures()->where('modele', $modele)->exists();
        return $possedeModele;
    }
}
