<?php

namespace App\Http\Controllers;

use App\Models\Campuse;
use Illuminate\Http\Request;

class CampuseController extends Controller
{
    public function campuses() {
        return view('/campuses/index');
    }

    public function show($id){
        $campuse = Campuse::find($id);
        return view('campuses.show', compact('campuse'));
    }
}
