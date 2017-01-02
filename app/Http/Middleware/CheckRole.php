<?php

namespace App\Http\Middleware;

use Closure;

class CheckRole
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
        if ($request->user()=== null){ //guest will get this message
            //return response("Insufficient permissions", 401);
            return redirect()->route('product.index')->with('success', 'If it only were that simple...');
        }
        $actions = $request->route()->getAction();
        $roles = isset($actions['roles']) ? $actions['roles'] : null;

        if ($request->user()->hasAnyRole($roles) || !$roles) {
            return $next($request);
        }
        //return response("Insufficient permissions", 401); //unauthorized users will get this message
        return redirect()->route('product.index')->with('success', 'If it only were that simple...');
    }
}
