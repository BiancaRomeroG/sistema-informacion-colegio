<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\rol;
use Illuminate\Support\Facades\Auth;

class RolesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $rol1, $rol2, $rol3)
    {
        $roles = [];
        if ($rol1 != null)
        {
            $roles[] = $rol1;

        }
        if ($rol2 != null)
        {
            $roles[] = $rol2;
            
        }
        if ($rol3 != null)
        {
            $roles[] = $rol3;
            
        }
        foreach($roles as $rol)
        {
            $rol = rol::where('nombre_rol', '=',$rol)->first();
            if ($rol != null && Auth::user()->id_rol == $rol->id)
            {
                return $next($request);
            }
        }
        
        return redirect()->route('login');
    }
}
