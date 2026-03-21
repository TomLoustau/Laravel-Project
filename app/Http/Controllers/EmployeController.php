<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index() {
        $employes = Employe::all();
        return view('employes.index', compact('employes'));
    }

    public function show($id){
        $employe = Employe::find($id);
        $nbVoitures = $employe->voitureCount($id);
        $statut = $employe->statutEmp($id);
        $voitures = $employe->voitures()->get();
        return view('employes.show', compact('employe', 'nbVoitures', 'statut', 'voitures'));
    }

    public function verifier($id){
        $employe = Employe::find($id);
        $modele = $employe->possedeModele($id, $_GET['modele']);
        return redirect()->route('employes.show', $id)->with('resultat', $modele ? "Yes" : "No");
    }

}
