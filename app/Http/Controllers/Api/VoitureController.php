<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Trajet;
use App\Models\Voiture;
use Illuminate\Http\Request;

class VoitureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $voitures = Voiture::index();
        return $voitures;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = ([
            'modele' => 'required|string',
            'nb_place' => 'required|int',
            'id_proprio' => 'exists:employe,id',
        ]);

        $voiture = Voiture::create($validate);

        return response()->json($voiture, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voiture = Voiture::findOrFail($id);
        return $voiture;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $voiture = Voiture::findOrFail($id);

        $validate = ([
            'modele' => 'required|string',
            'nb_place' => 'required|int',
            'id_proprio' => 'exists:employe,id',
        ]);

        $voiture->update($validate);

        return response()->json($voiture);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voiture = Voiture::findOrFail($id);
        $voiture->delete();

        return response()->json(['message' => 'Voiture supprimée']);
    }
}
