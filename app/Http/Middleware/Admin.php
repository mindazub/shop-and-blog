<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use Illuminate\Http\Request;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, User $user)
    {
        if( Auth::user()->isAdmin() )
        {
            return redirect()->route('admin.show');
        } else {
            return redirect()->back();
        }

        return $next($request);
    }
}
