<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string[]|null  ...$guards
     * @return mixed
     */
    public function handle($request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if (Auth::guard($guard)->check()) {
                // Jika yang login adalah admin (guard web)
                if ($guard === 'web') {
                    return redirect('/admin/dashboard');
                }
                // Jika yang login adalah peserta (guard applicant)
                if ($guard === 'applicant') {
                    return redirect('/applicant/dashboard');
                }

                return redirect(RouteServiceProvider::HOME);
            }
        }

        return $next($request);
    }
}
