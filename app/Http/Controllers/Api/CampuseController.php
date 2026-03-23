<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Campuse;
use App\Models\Employe;
use Illuminate\Http\Request;

class CampuseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $campuses = Campuse::all();
        return $campuses;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated =([
            'description' => 'required|string',
            'adresse' => 'required|string',
            'type' => 'required'
        ]);

        $campuse = Campuse::create($validated);

        return response()->json($campuse, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $campuse = Campuse::findOrFail($id);
        return $campuse;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $campuse = Campuse::findOrFail($id);

        $validated =([
            'description' => 'required|string',
            'adresse' => 'required|string',
            'type' => 'required'
        ]);

        $campuse->update($validated);

        return response()->json($campuse);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $campuse = Campuse::findOrFail($id);
        $campuse->delete();

        return response()->json(['message' => 'Campuse supprimé']);
    }
}
