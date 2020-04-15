<?php

namespace App\Http\Middleware;

use Closure;

class ServiceChecker
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

        $value = session('attendancelock');

        $date = date("D, M jS, Y");


        //dd("you need to register");

        if($value != $date){

            return redirect("/service/register");
        }


        return $next($request);
    }
}
