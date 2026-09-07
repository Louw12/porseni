<?php

namespace App\Http;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class RoleMiddleware
{
    /**
     * Handle an incoming request.
     * Accepts a comma-separated list of roles, e.g. "admin" or "admin,user"
     */
    public function handle(Request $request, Closure $next, string $roles = null): Response
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->route('login');
        }

        if ($roles === null) {
            return $next($request);
        }

        $allowed = array_map('trim', explode(',', $roles));

        if (!in_array($user->role, $allowed, true)) {
            abort(403, 'Unauthorized');
        }

        return $next($request);
    }
}
