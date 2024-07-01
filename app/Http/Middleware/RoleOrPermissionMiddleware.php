<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class RoleOrPermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     * @param  string  $roleOrPermission
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function handle($request, Closure $next, $roleOrPermission)
    {
        if (!Auth::check()) {
            return redirect('login');
        }

        $user = Auth::user();

        if (!$user->hasAnyRole(explode('|', $roleOrPermission)) && !$user->can($roleOrPermission)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
