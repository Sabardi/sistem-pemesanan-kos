<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureOwnerHasProperty
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        // Check if user is authenticated, is an owner, and has no properties
        if ($user && $user->role === 'owner' && !$user->properties()->exists()) {
            // Allow access to property creation page and its store route
            if ($request->routeIs('owner.properties.create') || $request->routeIs('owner.properties.store')) {
                return $next($request);
            }
            // Redirect to property creation page for other owner routes
            return redirect()->route('owner.properties.create')->with('warning', 'Please add your first property to continue.');
        }

        return $next($request);
    }
}
