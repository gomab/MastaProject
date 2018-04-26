<?php

namespace App\Http\Middleware;

use Brian2694\Toastr\Facades\Toastr;
use Closure;
use Illuminate\Support\Facades\Auth;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        if(!Auth::user()->admin){
            Toastr::warning('Vous n avez pas de droits necessaire pour effectuer cette opération. Veuillez contacter un utilisateur agréé', 'Brazza HipHop', ["positionClass" => "toast-top-right"]);

            return redirect()->back();
        }

        return $next($request);
    }
}
