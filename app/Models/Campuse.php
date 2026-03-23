<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Campuse extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        'description',
        'adresse',
        'type',
        'id_employe'
    ];

    protected function TrajetsDep()
    {
        return $this->hasMany(Trajet::class, "id_campuses_depart");
    }

    protected function TrajetsArr()
    {
        return $this->hasMany(Trajet::class, "id_campuses_arrivee");
    }

    protected function Employes()
    {
        return $this->belongsToMany(Employe::class, "frequentes");
    }
}
