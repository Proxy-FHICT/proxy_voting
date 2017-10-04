<?php

namespace App\Http\Middleware;

use Closure;

class CheckFinished
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
        if($request->session()->has('fin') || !($request->session()->has('student_record')))
        {
             abort(403, 'Unauthorized action.');
        }else{
            return $next($request);
        }
    }
}
