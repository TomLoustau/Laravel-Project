<?php

namespace App\Http\Middleware;

use App\Models\Voiture;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class InferieurA8Places
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $voiture = Voiture::find($request->route('id'));
        $employe = $voiture->employe;
        if($voiture->nb_place >= 8){
            return redirect()->route('employe.show', [$employe->id])
                ->with('error', 'Visualisation des bus en cours');
        }
        return $next($request);
    }
}
