<?php

namespace App\Http\Middleware;

use Closure;
use App\Http\Controllers\SessionController;

class Autorizacion
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
        if(!app(SessionController::class)->verifySession($request))
            return redirect('/');
        return $next($request);
    }
}
