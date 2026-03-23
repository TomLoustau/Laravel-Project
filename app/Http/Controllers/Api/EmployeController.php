<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index() {
        $employes = Employe::all();
        return $employes;
    }

    public function show($id){
        $employe = Employe::findOrFail($id);
        return $employe;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required'
        ]);

        $employe = Employe::create($validated);

        return response()->json($employe, 201);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $employe = Employe::findOrFail($id);

        $validated =([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required'.$id
        ]);

        $employe->update($validated);

        return response()->json($employe);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $employe = Employe::findOrFail($id);
        $employe->delete();

        return response()->json(['message' => 'Employé supprimé']);
    }
}
