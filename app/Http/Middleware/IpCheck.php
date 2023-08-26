<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IpCheck
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->ip() == '127.0.0.1'){
            return $next($request);
        }

        return redirect(route('home'));
    }

    public function terminate($request, $response){
        file_put_contents(__DIR__ . "/test.txt","File saved from terminate method");
    }
}
