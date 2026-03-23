<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $trajets = Trajet::index();
        return $trajets;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =([
            'date_time_dep' => 'required|date',
            'date_time_arr' => 'required|date',
            'id_campuse_dep' => 'exists:campuse,id',
            'id_campuse_arr' => 'exists:campuse,id',
            'id_voiture' => 'exists:voiture,id',
        ]);

        $trajet = Trajet::create($validated);

        return response()->json($trajet, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $trajet = Trajet::findOrFail($id);
        return $trajet;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $trajet = Trajet::findOrFail($id);

        $validated =([
            'date_time_dep' => 'required|date',
            'date_time_arr' => 'required|date',
            'id_campuse_dep' => 'exists:campuse,id',
            'id_campuse_arr' => 'exists:campuse,id',
            'id_voiture' => 'exists:voiture,id',
        ]);

        $trajet->update($validated);

        return response()->json($trajet);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $trajet = Trajet::findOrFail($id);
        $trajet->delete();

        return response()->json(['message' => 'Trajet supprimé']);
    }
}
