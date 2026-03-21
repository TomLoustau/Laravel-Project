<?php

namespace App\Http\Controllers;

use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    public function voitures() {
        return view('/voitures/index');
    }

    public function create($id)
    {
        return view('voitures.create', compact('id'));
    }

    public function store(Request $request, $id)
    {
        Voiture::create([
            'modele' => $request->modele,
            'nb_place' => $request->nb_place,
            'id_proprio' => $id
        ]);

        return redirect()->route('employe.show', $id);
    }
    public function show($id){
        $voiture = Voiture::find($id);
        $employe = $voiture->employe;
        $nbVoitures = $employe->voitureCount($employe->id);
        return view('voitures.show', compact('voiture','employe', 'nbVoitures'));
    }
}
