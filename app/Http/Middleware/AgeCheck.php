<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AgeCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next, $name)
    {


        if($name !='ahmead'){
            
            abort(Response::HTTP_UNAUTHORIZED);

            // dd( 'sorry tray agian later');
        }
        return $next($request);

    }
}
