<?php

namespace App\Http\Controllers;

use App\Models\Trajet;
use Illuminate\Http\Request;

class TrajetController extends Controller
{
    public function trajets() {
        return view('/trajets/index');
    }

    public function show($id){
        $trajets = Trajet::find($id);
        return view('trajets.show', compact('trajets'));
    }
}
