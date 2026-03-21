<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function voitures() {
        return view('/voitures/index');
    }

    public function show($id){
        $voiture = Voiture::find($id);
        $employe = $voiture->employe;
        $nbVoitures = $employe->voitureCount($employe->id);
        return view('voitures.show', compact('voiture','employe', 'nbVoitures'));
    }
}
