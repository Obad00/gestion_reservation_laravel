<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */

        public function handle($request, Closure $next, $permission)
        {
            if (!Auth::check()) {
                return redirect('login');
            }

            $user = Auth::user();

            if (!$user->can($permission)) {
                abort(403, 'Unauthorized');
            }

            return $next($request);
        }    }
