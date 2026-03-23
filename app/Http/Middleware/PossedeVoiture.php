<?php

namespace App\Http\Middleware;

use App\Models\Employe;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PossedeVoiture
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $employe = Employe::find($request->route('id'));

        if($employe->voitureCount($employe->id) == 0){
            return redirect()->route('voitures.create', [$employe->id]);
        }
        return $next($request);
    }
}
