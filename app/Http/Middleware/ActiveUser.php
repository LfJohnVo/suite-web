<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class ActiveUser
{
    /**
     * Handle an incoming request.
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if (!User::getCurrentUser()->is_active) {
            return redirect()->route('users.usuario-bloqueado');
        }

        return $next($request);
    }
}
